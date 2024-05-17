<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //harus login dulu baru bisa akses home
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $barangs = Barang::where('nama_barang','LIKE','%' .$request->search.'%')->paginate(12);
        }else{
            $barangs = Barang::paginate(12);
        }
       
        return view('home', compact('barangs'));
    }
    public function about()
    {

        return view('about');
    }
}
