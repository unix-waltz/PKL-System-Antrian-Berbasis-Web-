<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
Route::get('/data_antrian',[TaskController::class,"system_antrian"]);
Route::get('/antrian',[TaskController::class,'antrian']);
Route::get('/', function () {
    return redirect('/antrian');
});
Route::get('/nomor/antrian/penguna',[TaskController::class,"nomor_antrian"]);
Route::get('/about',[TaskController::class,"about"]);
Route::get('/home', function () {
    return view('home');
});
\Illuminate\Support\Facades\Auth::routes();
Route::get('/nomor/antrian/start',[TaskController::class,"antrian_mulai"]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
