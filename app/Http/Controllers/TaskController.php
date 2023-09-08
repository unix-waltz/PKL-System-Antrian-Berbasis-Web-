<?php

namespace App\Http\Controllers;

use App\Models\Penguna;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isTrue;

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
        'catatan' => 'nullable|string',
        "status" => "required|string",
        
    ]);
    $pengguna = new Penguna();
    $pengguna->nama = $validated['nama'];
    $pengguna->alamat = $validated['alamat'];
    $pengguna->catatan = $validated['catatan'];
    $pengguna->status = $validated['status'];
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
{ $page = penguna::paginate(1);
  $count = Penguna::count();
  $data = Penguna::get();
  if (auth()->check()) {
    return view("antrian.mulai",["data"=>$data,
    "count"=>$count,
  "page" => $page]);
} else {
    // Pengguna belum login, arahkan ke halaman login atau tampilkan pesan kesalahan
    return redirect('/login')->with('error', 'Anda harus login terlebih dahulu.');
}
}
public function about()
{
  return view("about");
}
public function update_status(Request $id){
  $id = $id->id;
$update = Penguna::find($id);
if($update){
  $update->status = "Selesai Mengantri";
  $update->save();
 $id = $id+1;
  return redirect("/nomor/antrian/start?page=$id");
}
}
public function canceled(Request $id){
  $id = $id->id;
$update = Penguna::find($id);
if($update){
  $update->status = "Antrian Ditolak";
  $update->save();
  $id = $id+1;
  return redirect("/nomor/antrian/start?page=$id");
}
}
}