<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\DataKaryawanController;
use App\Http\Controllers\DataCalonKaryawanController;
use App\Http\Controllers\DataDepartemenController;
use App\Http\Controllers\DataBagianController;
use App\Http\Controllers\DataFPTKController;
use App\Http\Controllers\DataTrInduksiController;
use App\Http\Controllers\DataPegawaiController;

// ==================================================================================
// Dokumentasi ***

// Route::get = menarik / membaca / menampilkan / memanggil
// Route::post = menulis / menyimpan
// Route::put = menulis ulang / mengupdate data lama
// Route::group = menggabungkan banyak route dalam satu ruang lingkup

// End Dokumentasi ***
// ==================================================================================
// Start Route Auth ***

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/logout', [LoginController::class, 'logout']);

// End Route Auth ***
// ==================================================================================
// Start Route Master ***

Route::group(['prefix' => 'DataKaryawan', 'middleware' => 'web'], function () {
    Route::get('/', [DataKaryawanController::class, 'index']);
    Route::get('/create', [DataKaryawanController::class, 'create']);
    Route::get('/edit/{id}', [DataKaryawanController::class, 'edit']);
    Route::get('/destroy/{id}', [DataKaryawanController::class, 'destroy']);
    Route::post('/store', [DataKaryawanController::class, 'store']);
    Route::put('/update', [DataKaryawanController::class, 'update']);
});

Route::group(['prefix' => 'DataDepartemen', 'middleware' => 'web'], function () {
    Route::get('/', [DataDepartemenController::class, 'index']);
    Route::get('/create', [DataDepartemenController::class, 'create']);
    Route::get('/edit/{id}', [DataDepartemenController::class, 'edit']);
    Route::get('/destroy/{id}', [DataDepartemenController::class, 'destroy']);
    Route::post('/store', [DataDepartemenController::class, 'store']);
    Route::put('/update', [DataDepartemenController::class, 'update']);
});

Route::group(['prefix' => 'DataBagian', 'middleware' => 'web'], function () {
    Route::get('/', [DataBagianController::class, 'index']);
    Route::get('/create', [DataBagianController::class, 'create']);
    Route::get('/edit/{id}', [DataBagianController::class, 'edit']);
    Route::get('/destroy/{id}', [DataBagianController::class, 'destroy']);
    Route::post('/store', [DataBagianController::class, 'store']);
    Route::put('/update', [DataBagianController::class, 'update']);
});

// End Route Master ***
// ==================================================================================
// Start Route Activity ***

Route::group(['prefix' => 'DataCalonKaryawan', 'middleware' => 'web'], function () {
    Route::get('/', [DataCalonKaryawanController::class, 'index']);
    Route::get('/create', [DataCalonKaryawanController::class, 'create']);
    Route::get('/edit/{id}', [DataCalonKaryawanController::class, 'edit']);
    Route::get('/destroy/{id}', [DataCalonKaryawanController::class, 'destroy']);
    Route::post('/store', [DataCalonKaryawanController::class, 'store']);
    Route::put('/update', [DataCalonKaryawanController::class, 'update']);
});

Route::group(['prefix' => 'DataFPTK', 'middleware' => 'web'], function () {
    Route::get('/', [DataFPTKController::class, 'index']);
    Route::get('/create', [DataFPTKController::class, 'create']);
    Route::get('/edit/{id}', [DataFPTKController::class, 'edit']);
    Route::get('/destroy/{id}', [DataFPTKController::class, 'destroy']);
    Route::post('/store', [DataFPTKController::class, 'store']);
    Route::put('/update', [DataFPTKController::class, 'update']);
});

Route::group(['prefix' => 'DataTrInduksi', 'middleware' => 'web'], function () {
    Route::get('/', [DataTrInduksiController::class, 'index']);
    Route::get('/create', [DataTrInduksiController::class, 'create']);
    Route::get('/edit/{id}', [DataTrInduksiController::class, 'edit']);
    Route::get('/destroy/{id}', [DataTrInduksiController::class, 'destroy']);
    Route::post('/store', [DataTrInduksiController::class, 'store']);
    Route::put('/update', [DataTrInduksiController::class, 'update']);
});

// End Route Activity ***
// ==================================================================================
// Start Route Laporan ***

Route::group(['prefix' => 'PengumumanCaKar', 'middleware' => 'web'], function () {
    Route::get('/', [PengumumanCaKarController::class, 'index']);
    Route::get('/create', [PengumumanCaKarController::class, 'create']);
    Route::get('/edit/{id}', [PengumumanCaKarController::class, 'edit']);
    Route::get('/destroy/{id}', [PengumumanCaKarController::class, 'destroy']);
    Route::post('/store', [PengumumanCaKarController::class, 'store']);
    Route::put('/update', [PengumumanCaKarController::class, 'update']);
});

// End Route Laporan ***
// ==================================================================================
// Start Route Pegawai ***

Route::group(['prefix' => 'DataPegawai', 'middleware' => 'web'], function () {
    Route::get('/', [DataPegawaiController::class, 'index']);
    Route::get('/create', [DataPegawaiController::class, 'create']);
    Route::get('/edit/{id}', [DataPegawaiController::class, 'edit']);
    Route::get('/destroy/{id}', [DataPegawaiController::class, 'destroy']);
    Route::post('/store', [DataPegawaiController::class, 'store']);
    Route::put('/update', [DataPegawaiController::class, 'update']);
});

// require __DIR__ . '/auth.php';
