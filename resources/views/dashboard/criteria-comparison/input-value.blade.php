@extends('layout.main')


@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Nilai Kriteria </h1>
  </div>

  <div class="table-responsive col-lg-12">
    <div class="d-lg-flex justify-content-end gap-2">
      <a href="/dashboard/criteria-comparisons" class="btn btn-secondary mb-3">
        <span data-feather="arrow-left"></span>
        Kembali
      </a>

      @if ($isDoneCounting)
      <a href="/dashboard/criteria-comparisons/result/{{ $criteria_analysis->id }}" class="btn btn-success mb-3 ml-4">
        <span data-feather="clipboard"></span>
        Hasil Normalisasi
      </a>
      @endif
    </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class="text-center">Kriteria 1</th>
          <th scope="col" class="text-center">Nilai</th>
          <th scope="col" class="text-center">Kriteria 2</th>
          <th scope="col" colspan="2"></th>
        </tr>
      </thead>
      <tbody>
        @if (count($details))
          <form action="/dashboard/criteria-comparisons/{{ $details[0]->criteria_analysis_id }}" method="POST">
            @method('put')
            @csrf

            <input type="hidden" name="id" value="{{ $details[0]->criteria_analysis_id }}">
            @foreach ($details as $detail)
              <tr>
                <input type="hidden" name="criteria_analysis_detail_id[]" value="{{ $detail->id }}">

                <td class="text-center">
                  {{ $detail->firstCriteria->name }}
                </td>
                <td class="text-center">
                  <select class="form-select" name="comparison_values[]" required>
                    <option value="" disabled selected>--Pilih Satu--</option>
                    <option value="1" {{ $detail->comparison_value == 1 ? 'selected' : '' }}>
                      1 - Sama Penting
                    </option>
                    <option value="2" {{ $detail->comparison_value == 2 ? 'selected' : '' }}>
                      2 - Dua Kriteria Berdekatan Butuh Pertimbangan
                    </option>
                    <option value="3" {{ $detail->comparison_value == 3 ? 'selected' : '' }}>
                      3 - Cukup Penting
                    </option>
                    <option value="4" {{ $detail->comparison_value == 4 ? 'selected' : '' }}>
                      4 - Dua Kriteria Berdekatan Butuh Pertimbangan
                    </option>
                    <option value="5" {{ $detail->comparison_value == 5 ? 'selected' : '' }}>
                      5 - Lebih Penting
                    </option>
                    <option value="6" {{ $detail->comparison_value == 6 ? 'selected' : '' }}>
                      6 - Dua Kriteria Berdekatan Butuh Pertimbangan
                    </option>
                    <option value="7" {{ $detail->comparison_value == 7 ? 'selected' : '' }}>
                      7 - Sangat Penting
                    </option>
                    <option value="8" {{ $detail->comparison_value == 8 ? 'selected' : '' }}>
                      8 - Dua Kriteria Berdekatan Butuh Pertimbangan
                    </option>
                    <option value="9" {{ $detail->comparison_value == 9 ? 'selected' : '' }}>
                      9 - Mutlak Lebih Penting
                    </option>
                  </select>
                </td>
                <td class="text-center">
                  {{ $detail->secondCriteria->name }}
                </td>
              </tr>
            @endforeach
            @can('update', $criteria_analysis)
              <tr>
                <td class="text-center">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </td>
              </tr>
            @endcan
          </form>
        @endif
      </tbody>
    </table>
  </div>
@endsection