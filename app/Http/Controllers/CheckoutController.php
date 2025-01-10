<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // Halaman Keranjang
    public function showCheckout()
    {
        return view('checkout'); // Tampilkan view transaksi.blade.php
    }

    public function store(Request $request)
    {
        // Validasi input dari frontend
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'payment_method' => 'required|string',
            'cart' => 'required|array',
            'total_price' => 'required|numeric',
        ]);

        // Simpan data transaksi ke dalam database
        $transaction = new Transaction();
        $transaction->name = $request->name;
        $transaction->phone = $request->phone;
        $transaction->payment_method = $request->payment_method;
        $transaction->total_price = $request->total_price;
        $transaction->save();

        // Simpan setiap item dari keranjang
        foreach ($request->cart as $item) {
            $transaction->items()->create([
                'product_name' => $item['productName'],
                'quantity' => $item['quantity'],
                'price' => $item['productPrice'],
            ]);
        }

        return response()->json(['message' => 'Pesanan sedang diproses, Mohon ditunggu.']);
    }

}

