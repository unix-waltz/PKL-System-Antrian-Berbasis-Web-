<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/pendaftaran',[TaskController::class,'pendaftaran']);
Route::get('/jadwal',[TaskController::class,'jadwal']);
Route::get('/penugasan',[TaskController::class,'penugasan']);
Route::get('/kemajuan',[TaskController::class,'kemajuan']);
Route::get('/dokumen',[TaskController::class,'dokumen']);
Route::get('/komunikasi',[TaskController::class,'komunikasi']);
Route::get('/evaluasi',[TaskController::class,'evaluasi']);
Route::get('/pelaporan',[TaskController::class,'pelaporan']);
Route::get('/keamanan',[TaskController::class,'keamanan']);
Route::get('/dashboard',[TaskController::class,'dashboard']);
Route::get('/pengingat',[TaskController::class,'pengingat']);
Route::get('/integrasi',[TaskController::class,'integrasi']);
Route::get('/histori',[TaskController::class,'histori']);
Route::get('/pengarsipan',[TaskController::class,'pengarsipan']);
Route::get('/pengelolaan',[TaskController::class,'pengelolaan']);
Route::get('/', function () {
    return view('home');
});
