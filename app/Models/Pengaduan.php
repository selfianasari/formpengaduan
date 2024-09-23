<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';
    protected $fillable = [
        'nama_pelapor',
        'alamat',
        'no_telepon_atau_email',
        'kategori_pengaduan',
        'deskripsi_pengaduan',
        'lokasi_pengaduan',
        'foto_bukti',
    ];
}
