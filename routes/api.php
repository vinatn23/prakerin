<?php

use App\Models\Provinsi;
use App\Models\Kasus2;
use App\Models\Rw;
use App\Http\Controllers\Api\provinsiController;
use App\Http\Controllers\Api\apiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// API PROVINSI
Route::get('kasus',[ProvinsiController::class,'index']);
Route::get('kasus/{id}',[ProvinsiController::class,'show']);
// API CONTROLLER
Route::get('indonesia',[ApiController::class,'index']);
Route::get('indonesia/provinsi/{id}',[ApiController::class,'provinsi']); 
Route::get('indonesia/prov',[ApiController::class,'provin']);
Route::get('indonesia/kots',[ApiController::class,'kota']);
Route::get('indonesia/kec',[ApiController::class,'kecamatan']);
Route::get('indonesia/kel',[ApiController::class,'kelurahan']);
Route::get('/global',[ApiController::class,'global']);
