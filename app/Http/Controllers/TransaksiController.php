<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // Halaman Keranjang
    public function showTransaksi()
    {
        return view('transaksi'); // Tampilkan view transaksi.blade.php
    }
}

