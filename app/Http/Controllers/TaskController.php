<?php

namespace App\Http\Controllers;

use App\Models\Penguna;
use App\Models\typeA;
use App\Models\typeB;
use App\Models\typeC;
use App\Models\typeD;
use App\Models\typeE;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isTrue;

class TaskController extends Controller
{
    public function antrian(){
      return view('antrian.pengguna');
    }
public function logicNomor($var)
{
switch($var){
  case 1 :
    $type = "A";
    $model = new typeA;
    break;
    case 2 :
      $type = "B";
      $model = new typeB;
      break;
      case 3 :
        $type = "C";
        $model =new typeC;
        break;
        case 4 :
          $type = "D";
          $model =new typeD;
          break;
          case 5 :
            $type = "E";
            $model = new typeE;
            break;
}
return $data = ["type" => $type, "model" =>$model];

}
    public function system_antrian(Request $request){
    {
    

      $var = mt_rand(1,5);
   $ress = $this->logicNomor($var);
   $var = $ress['type'];
   $model = new $ress['model'];
  $no_antrian = $model::max('nomor_antrian');

    
    $no_antrian =  $no_antrian + 1;
      
    $validated = $request->validate([
      "status" => "required|string",
      
  ]);
  
    $model->status = $validated['status'];
    $model->nomor_antrian = $no_antrian;
    $model->type = $var;
    $model->save();
   }
   
   
    return redirect('/nomor/antrian/penguna')
    ->with('nomor_antrian', $no_antrian)  
    ->with('type', $var);
  

  }

  public function nomor_antrian()
  {
      $nomor_antrian = session('nomor_antrian');
  $type = session('type');

      return view("antrian.nomor", ['nomor_antrian' =>$type.$nomor_antrian]);
  }




  public static function pecahAngka($angka)
  {
      // Mengambil digit ratusan
      $ratusan = (int)($angka / 100);
  
      // Mengambil digit puluhan/belasan
      $puluhan = (int)(($angka % 100) / 10);
  
      // Mengambil digit satuan
      $satuan = $angka % 10;
  
      return [
          'ratusan' => $ratusan,
          'puluhan' => $puluhan,
          'satuan' => $satuan,
      ];
  }
  







public function antrian_mulai()
{
   $page = penguna::paginate(1);
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