<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Alternative;
use Illuminate\Http\Request;
use App\Models\TourismObject;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $tanamanCount = TourismObject::count();
        $kriteriaCount = Criteria::count();
        $alternatifCount = Alternative::count();
        return view('dashboard.index', compact('tanamanCount', 'kriteriaCount', 'alternatifCount'));
    }
}
