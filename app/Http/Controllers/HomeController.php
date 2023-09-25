<?php

namespace App\Http\Controllers;

use App\Models\Csr;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $csrs = Csr::all();
        return view('welcome', compact('csrs'));
    }
}
