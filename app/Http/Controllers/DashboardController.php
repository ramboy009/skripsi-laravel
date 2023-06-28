<?php

namespace App\Http\Controllers;

use App\Models\Hepatitis;
use App\Models\Symptomp;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $modelSymptonmp = new Symptomp();
        $modelHepatits = new Hepatitis();
        $dataTotal = [
            "gejala"        => $modelSymptonmp->all()->count(),
            "hepatitis"     => $modelHepatits->all()->count()
        ];
        return view('admin.dashboard', compact('dataTotal'));
    }
}
