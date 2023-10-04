<?php

namespace App\Http\Controllers;

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

//             public static function loket($role){
              
// $db = \App\Models\User::find($role);
// $dbh = (int)$db->loket;
// if($dbh !== 0 && $dbh > 0){
// switch($dbh){
//     case  1 :
//         $data = ;
//         break;
//         case  2 :
//             $data = ;
//             break;
//             case  3 :
//                 $data = ;
//                 break;
//                 case  4 :
//                     $data = ;
//                     break;
//                     case  5 :
//                         $data = ;
//                         break;
//                         case  6 :
//                             $data = ;
//                             break;
// default :
// $data = 0;
// break;
// }
    
// }else{
   
// }

// return $data;
//             }
}
