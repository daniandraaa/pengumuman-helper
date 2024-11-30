<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Data email dengan kunci 'messages'
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'messages' => $request->message,  // Ganti menjadi 'messages'
        ];

        // Kirim email
        Mail::send('contactSend', $data, function ($message) use ($data) {
            $message->to('kangmasapp@gmail.com', 'KangMas')
                ->from($data['email'], $data['name'])
                ->subject('Pesan Baru dari Formulir Kontak');
        });

        // Redirect dengan pesan sukses
        return back()->with('success', 'Pesan Anda berhasil dikirim.');
    }
}
