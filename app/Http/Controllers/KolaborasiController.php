<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KolaborasiController extends Controller
{
    // Menampilkan halaman form kolaborasi
    public function index()
    {
        // Pastikan untuk memanggil view yang ada di dalam folder emails
        return view('emails.kolaborasi');
    }

    // Metode untuk mengirim email pengujian
    public function sendTestEmail()
    {
        // Kirim email uji coba
        Mail::raw('Test email content', function ($message) {
            $message->to('nestaracoffe@gmail.com')
                    ->subject('Test Email');
        });

        // Berikan respon jika email berhasil dikirim
        return "Test email sent!";
    }

    // Menangani pengiriman email dari form kolaborasi
    public function sendEmail(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phonenumber' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        // Data untuk email
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'message' => $request->message,
        ];

        // Kirim email
        Mail::send('emails.kolaborasi', $data, function ($message) use ($data) {
            $message->to('nestaracoffe@gmail.com')
                    ->subject('Pesan Kolaborasi dari ' . $data['name']);
        });

        // Kembalikan respons sukses ke pengguna
        return redirect()->back()->with('success', 'Pesan berhasil dikirim. Terima kasih telah menghubungi kami!');
    }
}