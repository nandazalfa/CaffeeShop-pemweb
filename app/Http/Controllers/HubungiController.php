<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HubungiController extends Controller
{
    // Menampilkan halaman Hubungi Kami
    public function index()
    {
        return view('hubungi'); // Pastikan file `hubungi.blade.php` ada di folder `resources/views/`
    }
}
