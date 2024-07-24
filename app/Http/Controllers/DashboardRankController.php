<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Alternative;
use Illuminate\Http\Request;
use App\Models\TourismObject;
use App\Models\CriteriaAnalysis;
use App\Models\CriteriaAnalysisDetail;

class DashboardRankController extends Controller
{
  public function index()
  {
    if (auth()->user()->level === 'USER') {
      $criteriaAnalyses = CriteriaAnalysis::where('user_id', auth()->user()->id)
        ->with('user')
        ->get();
    }

    if (auth()->user()->level === 'SUPERADMIN' || auth()->user()->level === 'ADMIN') {
      $criteriaAnalyses = CriteriaAnalysis::with('user')->get();
    }

    $availableCriterias = Criteria::all()->pluck('id');
    $isAnyAlternative   = Alternative::checkAlternativeByCriterias($availableCriterias);
    $isAbleToRank       = false;

    if ($isAnyAlternative) {
      $isAbleToRank = true;
    }

    return view('dashboard.final-rank.index', [
      'title'             => 'Final Ranking',
      'criteria_analyses' => $criteriaAnalyses,
      'isAbleToRank'      => $isAbleToRank,
    ]);
  }

  public function show(CriteriaAnalysis $criteriaAnalysis)
  {
    $criteriaAnalysis->load('preventiveValues');

    $criterias = CriteriaAnalysisDetail::getSelectedCriterias($criteriaAnalysis->id);
    $criteriaIds = $criterias->pluck('id');
    $dividers = Alternative::getDividerByCriteria($criterias);

    $pv = $criteriaAnalysis->preventiveValues;


    $this->authorize('admin');

    $usedIds = Alternative::select('tourism_object_id')->distinct()->get();
    $usedIdsFix = [];

    foreach ($usedIds as $usedId) {
      array_push($usedIdsFix, $usedId->tourism_object_id);
    }

    $alternatives = TourismObject::whereIn('id', $usedIdsFix)
      ->with('alternatives')
      ->get();

    $tourismObjects = TourismObject::whereNotIn('id', $usedIdsFix)->get();

    // Lakukan pengurangan nilai alternatif dengan bobot kriteria menggunakan PHP murni
    foreach ($alternatives as $tourismObject) {
      foreach ($tourismObject->alternatives as $alternative) {
        if ($alternative->alternatives) { // Periksa apakah objek alternatif tidak null
          foreach ($criterias as $criteria) {
            $altValue = $alternative->alternatives->firstWhere('criteria_id', $criteria->id);
            if ($altValue) { // Periksa apakah nilai alternatif ditemukan
              $criteriaWeight = $criteria->pivot->weight ?? 0; // Bobot kriteria dari pivot table
              // Kurangi nilai alternatif dengan bobot kriteria
              $altValue->alternative_value -= $criteriaWeight;
            }
          }
        }
      }
    }

    return view('dashboard.final-rank.rank', [
      'title'          => 'Final Ranking',
      'dividers'       => $dividers,
      'alternatives'   => $alternatives,
      'criterias'      => Criteria::all(),
      'tourism_objects' => $tourismObjects,
      'pv'             => $pv  // Menambahkan variabel pv ke view
    ]);
  }





  private function _countNormalization($dividers, $alternatives)
  {
    // return $alternatives;
    // return $dividers;
    $normalization = [];

    foreach ($alternatives as $alternative) {
      $normalizationNums = [];

      foreach ($alternative['alternative_val'] as $key => $val) {
        if ($val == 0) {
          $result = 0;
        }

        $attribute = $dividers[$key]['attribute'];

        if ($attribute === 'CORE FACTOR' && $val != 0) {
          $result = substr(floatval($val / $dividers[$key]['divider_value']), 0, 11);
        }

        if ($attribute === 'SECONDARY FACTOR' && $val != 0) {
          $result = substr(floatval($dividers[$key]['divider_value'] / $val), 0, 11);
        }

        array_push($normalizationNums, $result);
      }

      array_push($normalization, [
        'tourism_object_id' => $alternative['tourism_object_id'],
        'tourism_name' => $alternative['tourism_name'],
        'results' => $normalizationNums
      ]);
    }

    return $normalization;
  }

  private function _finalRanking($preventiveValues, $normalizations)
  {
    foreach ($normalizations as $keyNorm => $normal) {
      foreach ($normal['results'] as $keyVal => $value) {
        $importanceVal = $preventiveValues[$keyVal]->value;

        $result = $importanceVal * $value;

        if (array_key_exists('rank_result', $normalizations[$keyNorm])) {
          $normalizations[$keyNorm]['rank_result'] += $result;
        } else {
          $normalizations[$keyNorm]['rank_result'] = $result;
        }
      }
    }

    usort($normalizations, function ($a, $b) {
      return $b['rank_result'] <=> $a['rank_result'];
    });

    return $normalizations;
  }
}
