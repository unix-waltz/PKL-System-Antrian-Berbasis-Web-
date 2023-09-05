<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function antrian(){
      return view('antrian.pengguna');
    }
    public function system_antrian()
    {
      $nama = request('nama');
      $alamat = request('alamat');
      // $nomor_antrian = 
    }
}
