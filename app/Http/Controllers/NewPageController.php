<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class NewPageController extends Controller
{
    public function index()
    {
         // Mengambil data produk dari database
        $products = Product::all();

        // Mengelompokkan produk berdasarkan kategori
        $categories = ['coffee', 'non-coffee', 'dessert'];

        return view('product_page', compact('products', 'categories'));
    }
}
