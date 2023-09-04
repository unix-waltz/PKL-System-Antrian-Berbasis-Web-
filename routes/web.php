<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/pendaftaran',[TaskController::class,'pendaftaran']);
Route::get('/', function () {
    return view('home');
});
