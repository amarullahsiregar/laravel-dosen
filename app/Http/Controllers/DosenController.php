<?php

namespace App\Http\Controllers;

use App\Models\AntrianBimbingan;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dashboard($username)
    {

        $details = Dosen::where('email', '=', $username)->first();
        if ($details != null) {
            return view('dosen.dashboard', compact('details'));
        } else {
        }
    }
    public function setStatus(Request $request, $email)
    {

        $id = Dosen::where('email', '=', $email)->first()->id;
        $kesediaan = $request->kesediaan_bimbingan;
        if ($request->status_kehadiran == 'Mengajar' || $request->status_kehadiran == 'Tidak Hadir') {
            $kesediaan = 'Tidak';
        }
        dump($request->status_kehadiran);
        $dosen = Dosen::find(Dosen::where('email', '=', $email)->first()->id);
        $dosen->update([
            'status_kehadiran' => $request->status_kehadiran,

        ]);
        return redirect('/dashboard-dosen' . '/' . $email);
    }
    public function setHadir($key)
    {

        $antrian = Dosen::find($key);
        $antrian->update([
            'status_kehadiran' => 'Hadir',
        ]);
        return redirect('dashboard-dosen/' . $key);
    }
    public function setMengajar($key)
    {

        $antrian = Dosen::find($key);
        $antrian->update([
            'status_kehadiran' => 'Mengajar',
            'kesediaan_bimbingan' => 'Tidak',
        ]);
        return redirect('dashboard-dosen/' . $key);
    }
    public function setAbsen($key)
    {

        $antrian = Dosen::find($key);
        $antrian->update([
            'status_kehadiran' => 'Tidak Hadir',
            'kesediaan_bimbingan' => 'Tidak',
        ]);
        return redirect('dashboard-dosen/' . $key);
    }
    public function setBersedia($key)
    {

        $antrian = Dosen::find($key);
        $antrian->update([
            'status_kehadiran' => 'Hadir',
            'kesediaan_bimbingan' => 'Bersedia',
        ]);
        return redirect('antrian-mahasiswa/' . $key);
    }
    public function setTidakBersedia($key)
    {

        $antrian = Dosen::find($key);
        $antrian->update([
            'kesediaan_bimbingan' => 'Tidak',
        ]);
        return redirect('antrian-mahasiswa/' . $key);
    }

    public function listAntrian($email)
    {
        $details = Dosen::where('email', '=', $email)->first();
        $antrians = AntrianBimbingan::all()->where('email', '=', $email);
        if ($details != null) {
            return  view('dosen.bimbingan', compact('details', 'antrians'));
        }
    }
    public function detail($email)
    {
        $details = Dosen::where('email', '=', $email)->first();
        $mahasiswas = Mahasiswa::all();
        return view('dosen.detail', compact('details', 'mahasiswas'));
    }
    public function setProses($id)
    {
        $antrian = AntrianBimbingan::find($id);
        $antrian->update([
            'status' => 'Proses',
        ]);
        return redirect('antrian-mahasiswa/' . $antrian->email);
    }
    public function setSelesai($id)
    {
        $antrian = AntrianBimbingan::find($id);
        $antrian->update([
            'status' => 'Selesai',
        ]);
        return redirect('antrian-mahasiswa/' . $antrian->email);
    }
    public function setHapus($id)
    {
        $antrian = AntrianBimbingan::find($id);
        if ($antrian->delete()) {
            return redirect('antrian-mahasiswa/' . $antrian->email);
        }
    }
}
