<?php

namespace App\Http\Controllers;

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
}
