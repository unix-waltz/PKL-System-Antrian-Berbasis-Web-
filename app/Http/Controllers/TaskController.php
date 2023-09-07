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
    
   
    
      $no_antrian =  $no_antrian + 1;
      
      $validated = $request->validate([
        'nama' => 'required|max:255|string',
        'alamat' => 'required|string',
        'catatan' => 'nullable|string'
    ]);
    $pengguna = new Penguna();
    $pengguna->nama = $validated['nama'];
    $pengguna->alamat = $validated['alamat'];
    $pengguna->nomor_antrian = $no_antrian;
    $pengguna->type = $var;
    $pengguna->save();
    return redirect('/nomor/antrian/penguna')
    ->with('nomor_antrian', $no_antrian)  
    ->with('type', $var)
    ->with('alamat', $validated['alamat'])
    ->with('nama', $validated['nama']);

  }
}
  public function nomor_antrian()
  {
      // Ambil nomor antrian dari sesi jika tersedia
      $nomor_antrian = session('nomor_antrian');
  $type = session('type');
  $nama = session('nama');
  $alamat = session('alamat');
      // Lalu kirimkan nomor antrian ke tampilan
      return view("antrian.nomor", ['nomor_antrian' =>$type.$nomor_antrian,
    "alamat" => $alamat,
  "nama" => $nama,]);
  }
public function antrian_mulai()
{
  $page = penguna::paginate(1);
  $count = Penguna::count();
  $data = Penguna::get();
  return view("antrian.mulai",["data"=>$data,
  "count"=>$count,
"page" => $page]);
}
}