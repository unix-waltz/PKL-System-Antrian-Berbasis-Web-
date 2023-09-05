<?php

namespace App\Http\Controllers;

use App\Models\Penguna;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function antrian(){
      return view('antrian.pengguna');
    }
    public function system_antrian(Request $request){
    {
      $no_antrian = Penguna::max('nomor_antrian');
$no_antrian = intval($no_antrian);

// Sekarang, $no_antrian_integer adalah nilai integer


      $var = mt_rand(1,5);
      switch($var) {
        case 1:
            $var = "A";
            break;
        case 2:
            $var = "B";
            break;
        case 3:
            $var = "C";
            break;
        case 4:
            $var = "D";
            break;
        default:
            $var = "E";
            break;
    }
    
   
    
      $no_antrian = $var . ($no_antrian + 1);
      $no_antrian = strval($no_antrian);
      $validated = $request->validate([
        'nama' => 'required|max:255',
        'alamat' => 'required',
        'catatan' => 'nullable',
    ]);
    $pengguna = new Penguna();
    $pengguna->nama = $validated['nama'];
    $pengguna->alamat = $validated['alamat'];
    $pengguna->nomor_antrian = $no_antrian;
    $pengguna->save();

    };
}
}