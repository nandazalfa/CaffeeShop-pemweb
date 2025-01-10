<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Barryvdh\DomPDF\Facade as PDF;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
            'total_amount' => 'required|numeric',
        ]);

        $data['status'] = 'pending';
        $data['created_at'] = now();
        $data['updated_at'] = now();

        // Simpan ke database
        $transaction = Transaction::create($data);

        return response()->json(['success' => true, 'transaction_id' => $transaction->id]);
    }

    public function generateReceipt($id)
    {
        $transaction = Transaction::with('items')->findOrFail($id);

        // Siapkan data untuk struk
        $data = [
            'transaction' => $transaction,
        ];

        // Generate PDF
        $pdf = PDF::loadView('transactions.receipt', $data);

        // Return file PDF
        return $pdf->stream('receipt.pdf'); // atau ->download('receipt.pdf') untuk unduh langsung
    }
}
