<?php

namespace App\Http\Controllers;

use App\Models\FormPendaftaran;
use Illuminate\Http\Request;

class FormPendaftaranController extends Controller
{
    public function create()
    {
        // Arahkan ke file formPendaftaran.blade.php di folder Pendaftaran
        return view('Pendaftaran.formPendaftaran');
    }

    public function show()
    {
        // Ambil semua data dari tabel form_pendaftaran
        $data = FormPendaftaran::paginate(10); // 10 data per halaman


        // Kirim data ke view untuk ditampilkan
        return view('Pendaftaran.showData', compact('data'));
    }


    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'ktm' => 'required|file|mimes:pdf,jpg,jpeg,png|max:10000',
            'domisili' => 'required|string|max:255',
            'nim' => 'required|string|min:5',
            'cv' => 'required|file|mimes:pdf,doc,docx,jpeg,jpg,png|max:10000',
            'jurusan' => 'nullable|string|max:255',
            'keahlian' => 'required|string|max:255',
            'notelp' => [
                'required',
                'string',
                'regex:/^[0-9]+$/', // Validasi hanya angka
                'min:8', // Minimal 8 karakter
                'max:15', // Maksimal 15 karakter
            ],
            'email' => 'required|string|email|max:255',

            ], [
                'notelp.regex' => 'Nomor telepon hanya boleh berisi angka.',
                'notelp.min' => 'Nomor telepon minimal 8 digit.',
                'notelp.max' => 'Nomor telepon maksimal 15 digit.',
                'email.email' => 'Email harus dalam format yang benar.',
            ]); 

        
        try {
            // Simpan file KTM jika ada
            $ktmPath = $request->hasFile('ktm') ? $request->file('ktm')->store('uploads/ktm', 'public') : null;
    
            // Simpan file CV jika ada
            $cvPath = $request->hasFile('cv') ? $request->file('cv')->store('uploads/cv', 'public') : null;
    
            // Simpan data ke database
            FormPendaftaran::create([
                'nama' => $request->nama,
                'ktm' => $ktmPath, 
                'domisili' => $request->domisili,
                'nim' => $request->nim,
                'cv' => $cvPath,   
                'jurusan' => $request->jurusan,
                'keahlian' => $request->keahlian,
                'notelp' => $request->notelp, 
                'email' => $request->email, 
            ]);
    
            return redirect()->route('formPendaftaran.thankYou');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
        }
    }
    

    
}
