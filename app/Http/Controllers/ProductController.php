<?php

namespace App\Http\Controllers;

use App\Models\Product; // Pastikan mengimpor model Product

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Ambil semua data produk
        return view('welcome', compact('products')); // Kirim ke view 'welcome'
    }
}
