<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPendaftaran extends Model
{
    use HasFactory;
    protected $table = 'form_pendaftaran'; // Nama tabel

    protected $fillable = [
        'nama',
        'ktm',
        'domisili',
        'nim',
        'cv',
        'jurusan',
        'keahlian',
        'notelp',
        'email'
    ];
}
