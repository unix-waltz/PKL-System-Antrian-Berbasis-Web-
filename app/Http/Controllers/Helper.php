<?php

namespace App\Http\Controllers;

use App\Models\Asset;
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
}
