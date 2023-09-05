<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
Route::get('/data_antrian',[TaskController::class,"system_antrian"]);
Route::get('/antrian',[TaskController::class,'antrian']);
Route::get('/', function () {
    return redirect('/antrian');
});
Route::get('/home', function () {
    return view('home');
});