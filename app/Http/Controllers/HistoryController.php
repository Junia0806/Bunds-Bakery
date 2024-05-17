<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Pesanan;
use App\PesananDetail;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\User;


class HistoryController extends Controller
{
    public function __construct()
    {
        //harus login dulu baru bisa akses home
        $this->middleware('auth');
    }

    public function index()
    {
        //Jika status tidak nol maka ditampilkan di history
        $pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();
        return view('history.index', compact('pesanans'));
    }

    public function detail($id)
    {
        $pesanan =  Pesanan::where('id', $id)->first();
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        return view('history.detail', compact('pesanan','pesanan_details'));
    }
}
