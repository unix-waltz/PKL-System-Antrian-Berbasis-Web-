<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use App\Models\Penguna;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = penguna::paginate(1);
        $count = Penguna::count();
        $data = Penguna::get();
        return view('home',["data"=>$data,
    "count"=>$count,
"page" => $page]);
    }
}
