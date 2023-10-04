<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;

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

Route::get('/nomor/antrian/{type}/start',[TaskController::class,"antrian_mulai"]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/update/{type}/{id}',[TaskController::class,"update_status"])->name('update');
Route::get('/cancel/{type}/{id}',[TaskController::class,"canceled"])->name('canceled');
// super admin

Route::get('/login',[AuthController::class,'loginview'])->name('login')->middleware('guest');
Route::post('/loginAuth',[AuthController::class,'login'])->name('loginAuth')->middleware('guest');
Route::post('/logout',[AuthController::class,"logout"])->name('logout')->middleware('auth');


Route::post('/pendaftaran-Admin',[SuperAdminController::class,"pendaftaran_Admin"])->Middleware('auth')->name('registerAuth');
Route::get('/pendaftaran-Admin',[SuperAdminController::class,"view_pendaftaran_admin"])->Middleware('auth');
// loket
Route::put('/main_title_update',[SuperAdminController::class,"main_update"])->middleware('auth');
Route::get('/main-title',[SuperAdminController::class,"main_title"])->Middleware('auth');
Route::get('/loket/{type}/',[AdminController::class,"loket"])->Middleware('auth');
Route::get('/pengaturan-layanan',[SuperAdminController::class,"pengaturan_layanan"])->Middleware('auth');