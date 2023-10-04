<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Helper;
use App\Models\typeA;
use App\Models\typeB;
use App\Models\typeC;
use App\Models\typeD;
use App\Models\typeE;
use App\Models\TypeF;
use App\Models\Asset;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isTrue;

class TaskController extends Controller
{
    public function antrian(){
      $data = Asset::find(1);
      return view('antrian.pengguna',['data' => $data]);
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
            case 6 :
              $type = "F";
              $model = new TypeF;
              break;
}

return $data = ["type" => $type, "model" =>$model];

}
    public function system_antrian(Request $request){
    {
    

      $var = $request->key;
  
     
   $ress = $this->logicNomor($var);
  //  @dd($ress);
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
  







public function antrian_mulai($type)
{
$model = Helper::model($type);

   $page = $model::paginate(1);
  $count = $model::count();
  $data = $model::get();
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
public function update_status($type, $id){
 $model = Helper::model($type);
  $id = (int)$id;
$update = $model::find($id);
if($update){
  $update->status = "Selesai Mengantri";
  $update->save();
 $id = $id+1;
  return redirect("/nomor/antrian/".$type."/start?page=$id");
}
}
public function canceled($type, $id){
  $id = (int)$id;
  $model = Helper::model($type);
$update = $model::find($id);
if($update){
  $update->status = "Antrian Ditolak";
  $update->save();
  $id = $id+1;
  return redirect("/nomor/antrian/".$type."/start?page=$id");
}
}



public function mupdate_status($type, $id){
  $model = Helper::model($type);
   $id = (int)$id;
 $update = $model::find($id);
 if($update){
   $update->status = "Selesai Mengantri";
   $update->save();
  $id = $id+1;
   return redirect("/loket/".$type."/");
 }
 }
 public function mcanceled($type, $id){
   $id = (int)$id;
   $model = Helper::model($type);
 $update = $model::find($id);
 if($update){
   $update->status = "Antrian Ditolak";
   $update->save();
   $id = $id+1;
   return redirect("/loket/".$type."/");
 }
 }
}