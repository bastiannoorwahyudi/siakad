<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProdyController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\TahunAkademikController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\KhsController;
use App\Http\Controllers\InputNilaiController;
use App\Http\Controllers\TranskripController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'],function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan');
    Route::get('/jurusan/create', [JurusanController::class, 'create'])->name('jurusan-create');
    Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan-store');
    Route::get('/jurusan/{id}/edit', [JurusanController::class, 'edit'])->name('jurusan-edit');
    Route::patch('/jurusan/{id}/update', [JurusanController::class, 'update'])->name('jurusan-update');
    Route::get('/jurusan/{id}/delete', [JurusanController::class, 'destroy'])->name('jurusan-delete');

    Route::get('/prody', [ProdyController::class, 'index'])->name('prody');
    Route::get('/prody/create', [ProdyController::class, 'create'])->name('prody-create');
    Route::get('/prody/{id}/edit', [ProdyController::class, 'edit'])->name('prody-edit');
    Route::get('/prody/{id}/delete', [ProdyController::class, 'destroy'])->name('prody-delete');

    Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
    Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen-create');
    Route::get('/dosen/edit', [DosenController::class, 'edit'])->name('dosen-edit');

    Route::get('/tahunAkademik', [TahunAkademikController::class, 'index'])->name('tahunAkademik');
    Route::get('/tahunAkademik/create', [TahunAkademikController::class, 'create'])->name('tahunAkademik-create');
    Route::get('/tahunAkademik/edit', [TahunAkademikController::class, 'edit'])->name('tahunAkademik-edit');

    Route::get('/mataKuliah', [MataKuliahController::class, 'index'])->name('mataKuliah');
    Route::get('/mataKuliah/create', [MataKuliahController::class, 'create'])->name('mataKuliah-create');
    Route::get('/mataKuliah/edit', [MataKuliahController::class, 'edit'])->name('mataKuliah-edit');

    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa-create');
    Route::get('/mahasiswa/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa-edit');

    Route::get('/krs', [KrsController::class, 'index'])->name('krs');
    Route::get('/krs/create', [KrsController::class, 'create'])->name('krs-create');
    Route::get('/krs/edit', [KrsController::class, 'edit'])->name('krs-edit');

    Route::get('/khs', [KhsController::class, 'index'])->name('khs');
    Route::get('/khs/create', [KhsController::class, 'create'])->name('khs-create');
    Route::get('/khs/edit', [KhsController::class, 'edit'])->name('khs-edit');

    Route::get('/inputnilai', [InputNilaiController::class, 'index'])->name('inputnilai');
    Route::get('/inputnilai/create', [InputNilaiController::class, 'create'])->name('inputnilai-create');
    Route::get('/inputnilai/edit', [InputNilaiController::class, 'edit'])->name('inputnilai-edit');

    Route::get('transkrip', [TranskripController::class, 'index'])->name('transkrip');
    Route::get('transkrip/show', [TranskripController::class, 'show'])->name('transkrip-show');
});