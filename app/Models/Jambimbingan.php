<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jambimbingan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_dosen',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
    ];
}
