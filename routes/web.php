<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin',[App\Http\Controllers\HomeController::class, 'admin']);

use App\Http\Controllers\ProvinsiController;
Route::resource('admin/provinsi', ProvinsiController::class);

use App\Http\Controllers\KotaController;
Route::resource('admin/kota', KotaController::class);

use App\Http\Controllers\KecamatanController;
Route::resource('admin/kecamatan', KecamatanController::class);

use App\Http\Controllers\KelurahanController;
Route::resource('admin/kelurahan', KelurahanController::class);

use App\Http\Controllers\RwController;
Route::resource('admin/rw', RwController::class);

use App\Http\Controllers\Kasus2Controller;
Route::resource('admin/kasus2', Kasus2Controller::class);

use App\Http\Controllers\FrontendController;
Route::resource('/', FrontendController::class);
