<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusHadirDosen extends Model
{
    use HasFactory;

    protected $table = 'statushadirdosen'; // Nama tabel di database

    protected $primaryKey = 'id_status'; // Kunci utama tabel

    // Daftar kolom yang bisa diisi nilai nya
    protected $fillable = [
        'email',
        'tanggal',
        'status_kehadiran',
        'kesediaan_bimbingan',
        'slot_bimbingan',
        'keterangan'
    ];

    // Daftar atribut yang harus diubah menjadi tipe data tertentu
    protected $casts = [
        'tanggal' => 'date',
        // Atribut lain yang perlu di-cast
    ];

    // Relasi ke tabel dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'email', 'email');
    }

    // Metode lain yang diperlukan
}
