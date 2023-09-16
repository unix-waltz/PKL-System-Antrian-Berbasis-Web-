<?php

namespace App\Http\Controllers;

use App\Models\typeA;
use App\Models\typeB;
use App\Models\typeC;
use App\Models\typeD;
use App\Models\typeE;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class AdminController extends Controller
{
    public function loket($type){
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

    $data = $model::all();
 return view('loker',[
    "data" => $data,
"type" => $type,
 ]);
}
}