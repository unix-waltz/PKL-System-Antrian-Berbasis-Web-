<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Asset;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use App\Models\typeA;
use App\Models\typeB;
use App\Models\typeC;
use App\Models\typeD;
use App\Models\typeE;
use App\Models\TypeF;

class Helper extends Controller
{
    public static function model($type){
        switch($type){
            case  "A" :
                $model = new typeA;
                break;
                case  "B" :
                    $model = new typeB;
                    break;
                    case  "C" :
                        $model = new typeC;
                        break;
                        case  "D" :
                            $model = new typeD;
                            break;
                            case  "E" :
                                $model = new typeE;
                                break;
            }
        return $model;
    }
    public static function AdminDisplay($role){
if($role != env('ENV_LOGGING_ROLE')){
$layout = "display: none;";
return $layout;
}
    }

    public static function AdminRole($role){
        if($role != env('ENV_LOGGING_ROLE')){
        return $role;
        }
            }

            public static function loket($role){
$d = Asset::find(1);
$db = \App\Models\User::find($role);
$dbh = (int)$db->loket;
if($dbh !== 0 && $dbh > 0){
switch($dbh){
    case  1 :
        $data = $d->name_loket_a;
        $n = "A";
        break;
        case  2 :
            $data = $d->name_loket_b;
        $n = "B";

            break;
            case  3 :
        $n = "C";
        $data = $d->name_loket_c;
                break;
                case  4 :
        $n = "D";
        $data = $d->name_loket_d;
                    break;
                    case  5 :
        $n = "E";
        $data = $d->name_loket_e;
                        break;
                        case  6 :
        $n = "F";
        $data = $d->name_loket_f;
                            break;
default :
$data = 404;
$n = false;
break;
}
    
}else{
   $data= 404;
   $n = 404;
}

return [
"title" => $data,
"loket" => $n
];
            }
public static function resetter($model){
    date_default_timezone_set(env('ADD_REGION_TIME'));
$waktu_sekarang = (string)date('Y-m-d');

$mA = $model::orderBy('nomor_antrian', 'asc')->get()->last();

$type = $mA->type;
$tanggal_waktu_ = $mA->created_at->toDateString();

  if ($tanggal_waktu_ !== $waktu_sekarang) {
    $mA::truncate();
    $mA->create([
        "nomor_antrian" => 0,
        "status" => "Dalam Antrian",
        "type" => $type,
    ]);

return "ok";
  }else{
    return "nothing to change";
  }

}
public static function riwayat_($model){
    date_default_timezone_set(env('ADD_REGION_TIME'));
    $waktu_sekarang = (int)date('H');
    $mA_ = $model::all();
$nomorAntrianArray = [];
foreach ($mA_ as $model) {
    $nomorAntrianArray[] = $model->nomor_antrian;
}
$mA = $model::orderBy('nomor_antrian', 'asc')->get()->last();

$type = $mA->type;
// @dd($type);
$count = (string)count($nomorAntrianArray);
return $data = [
"count" => $count,
"type" => $type,
];
}
public static function riwayat($model1,$model2,$model3,$model4,$model5,$model6){
    $A = $model1;
    $B = $model2;
    $C = $model3;
    $D = $model4;
    $E = $model5;
    $F = $model6;
    date_default_timezone_set(env('ADD_REGION_TIME')); 
    $mA = $model1::orderBy('nomor_antrian', 'asc')->get()->last();
    $tanggal_waktu_A = $mA->created_at->toDateString();
    $mB = $model2::orderBy('nomor_antrian', 'asc')->get()->last();
    $tanggal_waktu_B = $mB->created_at->toDateString();
    $mC = $model3::orderBy('nomor_antrian', 'asc')->get()->last();
    $tanggal_waktu_C = $mC->created_at->toDateString();
    $mD = $model4::orderBy('nomor_antrian', 'asc')->get()->last();
    $tanggal_waktu_D = $mD->created_at->toDateString();
    $mE = $model5::orderBy('nomor_antrian', 'asc')->get()->last();
    $tanggal_waktu_E = $mE->created_at->toDateString();
    $mF = $model6::orderBy('nomor_antrian', 'asc')->get()->last();
    $tanggal_waktu_F = $mF->created_at->toDateString();

    $waktu_sekarang_ = (string)date('Y-m-d');
    // @dd($tanggal_waktu_A,$waktu_sekarang_);
    if (($tanggal_waktu_A !== $waktu_sekarang_) && ($tanggal_waktu_B !== $waktu_sekarang_) && ($tanggal_waktu_C !== $waktu_sekarang_) && ($tanggal_waktu_D !== $waktu_sekarang_) && ($tanggal_waktu_E !== $waktu_sekarang_) && ($tanggal_waktu_F !== $waktu_sekarang_)) {

   
    $model1 = Helper::riwayat_($model1);
    $model3 = Helper::riwayat_($model3);
    $model2 = Helper::riwayat_($model2);
$model4 = Helper::riwayat_($model4);
$model5 = Helper::riwayat_($model5);
$model6 = Helper::riwayat_($model6);



$texta = "Total " . $model1['count'] . " antrian dari Loket " .$model1['type'];
$textb = "Total " . $model2['count'] . " antrian dari Loket " .$model2['type'];
$textc = "Total " . $model3['count'] . " antrian dari Loket " .$model3['type'];
$textd = "Total " . $model4['count'] . " antrian dari Loket " .$model4['type'];
$texte = "Total " . $model5['count'] . " antrian dari Loket " .$model5['type'];
$textf = "Total " . $model6['count'] . " antrian dari Loket " .$model6['type'];
    $waktu_sekarang = date('l j F Y H:i');
$total = $model1['count'] + $model2['count'] + $model3['count'] + $model4['count'] + $model5['count'] + $model6['count'] . " Antrian";
// @dd($total);
    Riwayat::create([
        "total" => $total,
        'loket_a' =>  $texta,
        'loket_b' =>  $textb,
        'loket_c' =>  $textc,
        'loket_d' =>  $textd,
        'loket_e' =>  $texte,
        'loket_f' =>  $textf,
        "tangal" => $waktu_sekarang,
    ]);
    Helper::resetter($A);
    Helper::resetter($B);
    Helper::resetter($C);
    Helper::resetter($D);
    Helper::resetter($E);
    Helper::resetter($F);
}else{
    return "Nothing To Change!";
}
}
}
