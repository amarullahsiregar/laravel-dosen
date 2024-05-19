<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $mahasiswas = Mahasiswa::all();
        $dosens = Dosen::all();
        return view('mahasiswa.index', compact('mahasiswas', 'dosens'));
    }
}
