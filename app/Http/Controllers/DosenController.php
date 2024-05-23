<?php

namespace App\Http\Controllers;

use App\Models\AntrianBimbingan;
use App\Models\Dosen;
use App\Models\Jambimbingan;
use App\Models\Mahasiswa;
use Carbon\Carbon;
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
    public function setSlot(Request $request, $key)
    {

        $dosen = Dosen::find($key);
        if ($dosen->update(['slot_bimbingan' => $request->slot_bimbingan,])) {
            return redirect('/antrian-mahasiswa' . '/' . $dosen->email);
        }
    }
    public function setJam(Request $request, $key)
    {

        $dosen = Dosen::find($key);
        $jambimbingan = Jambimbingan::where('id_dosen', '=', $dosen->id)->first();
        if ($jambimbingan != null) {
            $jambimbingan->update([
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
            ]);
            return redirect('/antrian-mahasiswa' . '/' . $dosen->email);
        } else {
            Jambimbingan::create([
                'id_dosen' => $dosen->id,
                'tanggal' => Carbon::now()->toDateString(),
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
            ]);
            return redirect('/antrian-mahasiswa' . '/' . $dosen->email);
        }
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
        $jambimbingan = Jambimbingan::where('id_dosen', '=', $details->id)->first();
        $antrians = AntrianBimbingan::all()->where('email', '=', $email);
        if ($details != null) {
            return  view('dosen.bimbingan', compact('details', 'jambimbingan', 'antrians'));
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
