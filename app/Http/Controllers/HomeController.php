<?php

namespace App\Http\Controllers;

use App\Models\Csr;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $csrs = Csr::all();
        $teams = Team::all();
        return view('welcome', compact('csrs', 'teams'));
    }
}
