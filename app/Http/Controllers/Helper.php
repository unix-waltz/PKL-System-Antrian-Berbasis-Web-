<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typeA;
use App\Models\typeB;
use App\Models\typeC;
use App\Models\typeD;
use App\Models\typeE;
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
        if(!$role == env('ENV_LOGGING_ROLE')){
        return redirect('/home');
        }
            }
}
