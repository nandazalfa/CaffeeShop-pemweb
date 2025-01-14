<?php

namespace App\Http\Controllers;

use App\Models\Product; // Pastikan mengimpor model Product
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Ambil semua data produk
        return view('welcome', compact('products')); // Kirim ke view 'welcome'
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); // Pastikan produk ditemukan
        return view('product.show', compact('product')); // Tampilkan view detail produk
    }
}
