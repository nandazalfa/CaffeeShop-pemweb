<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KolaborasiController extends Controller
{
    public function index()
    {
        return view('kolaborasi');
    }
}
