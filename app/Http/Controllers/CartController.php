<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Halaman Keranjang
    public function showCart()
    {
        return view('cart'); // Tampilkan view cart.blade.php
    }
}

