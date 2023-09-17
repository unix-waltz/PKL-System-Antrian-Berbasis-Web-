<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function view_pendaftaran_admin(){
        return view('auth.register');
    }
    public function pendaftaran_Admin(Request $request){
$result = $request->validate([
"name" => "required|min:10|max:500",
"email" => "required|email",
"role" => "required",
"password" => "required",
]);
User::create($result);
return redirect('/home')->with("add_admin","succes add new admin");
    }

    public function main_title(){
        return view('auth.asset',[
            "old" => Asset::find(1),
        ]);
    }
    public function main_update(Request $request){
        $valid =$request->validate([
            "main_title" =>"min:1|nullable",
            "favicon" => "image|file|max:10000|nullable",
        ]);
        $update = Asset::find(1);
        if($update){
            if($request->file('favicon')===null){
                $newFaviconName = $request->old_img;
            }else{
            $newFaviconName = time() . '_' . $request->file('favicon')->getClientOriginalName();
            $newFaviconPath = $request->file('favicon')->storeAs('favicon', $newFaviconName);

            if ($update->favicon) {
                \Illuminate\Support\Facades\Storage::delete($update->favicon);
            }
        }
$update->main_title = $valid['main_title'];
$update->favicon = $newFaviconName;
$update->save();
return redirect('/main-title')->with('massage','succes change!');
        }
    }
}
