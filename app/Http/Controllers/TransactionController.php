<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\Pdf;


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

    public function receipt($transactionId)
    {
        // Ambil transaksi berdasarkan ID yang diberikan
        $transaction = Transaction::findOrFail($transactionId);


        // Siapkan data untuk struk (tanpa cart_items)
        $data = [
            'transaction' => $transaction,
        ];

        // Gunakan alias PDF (Barryvdh\DomPDF\Facade)
        $pdf = Pdf::loadView('transactions.receipt', $data);
        $pdf->setPaper('A4', 'portrait');  // Tentukan ukuran kertas

        // Render dan stream PDF
        return $pdf->stream('receipt.pdf'); // Atau untuk mengunduh: ->download('receipt.pdf')
    }



}