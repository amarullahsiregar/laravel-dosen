<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(route('login'));
});

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login-post', [AuthController::class, 'login']);
Route::get('/welcome', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth:dosen']], function () {
});
Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/dashboard/{username}', [DosenController::class, 'dashboard'])->name('dashboard');
// Masuk di Nav Bar
Route::get('/dashboard-dosen/{username}', [DosenController::class, 'dashboard'])->name('dashboard-dosen');
Route::get('/antrian-mahasiswa/{username}', [DosenController::class, 'listAntrian']); //Bisa diakses oleh dosen
Route::get('/detail-dosen/{username}', [DosenController::class, 'detail']);
Route::get('/set-proses/{id}', [DosenController::class, 'setProses']);
Route::get('/set-selesai/{id}', [DosenController::class, 'setSelesai']);
Route::get('/set-hapus/{id}', [DosenController::class, 'setHapus']);
// Masuk di Nav Bar

Route::get('/set-hadir/{key}', [DosenController::class, 'setHadir']);
Route::get('/set-mengajar/{key}', [DosenController::class, 'setMengajar']);
Route::get('/set-absen/{key}', [DosenController::class, 'setAbsen']);
Route::get('/set-bersedia/{key}', [DosenController::class, 'setBersedia']);
Route::get('/set-tidak-bersedia/{key}', [DosenController::class, 'setTidakBersedia']);
Route::post('/kehadiran-set-put/{username}', [DosenController::class, 'setStatus']);  //Bisa diakses oleh dosen
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
