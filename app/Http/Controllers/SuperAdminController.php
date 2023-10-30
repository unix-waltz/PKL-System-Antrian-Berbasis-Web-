<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Riwayat;
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
"loket" => "nullable|nullable",
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
        }
$update->main_title = $valid['main_title'];
$update->favicon = $newFaviconName;
$update->save();
return redirect('/main-title')->with('massage','succes change!');
        }
    }
    public function pengaturan_layanan(){
        return view('auth.pengaturan_layanan');
    }
    public function _pengaturan_layanan(Request $request){
       $data = Asset::find(1);
       if ($data) {
        $data->name_loket_a = $request->nameA;
        $data->name_loket_b = $request->nameB;
        $data->name_loket_c = $request->nameC;
        $data->name_loket_d = $request->nameD;
        $data->name_loket_e = $request->nameE;
        $data->name_loket_f = $request->nameF;
        $data->save();
        return redirect('/pengaturan-layanan')->with('message',"Record updated successfully.");
    } else {
        return redirect('/pengaturan-layanan')->with('message',"Record updated Failed.");
    }
    }
    public function riwayat(){
        $data = Riwayat::all();
        return view('auth.riwayat',[
            'data' => $data
        ]);
    }
    public function del_riwayat($id){
$riwayat = Riwayat::find($id);
if($riwayat){
$riwayat->delete();
return redirect('/riwayat')->with('message',"Delete successfully.");
} else {
    return redirect('/riwayat')->with('message'," Failed, something wrongs!");
}
    }
}
