<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        //harus login dulu baru bisa akses 
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

    	return view('profile.index', compact('user'));
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'password_konfirmasi' => 'confirmed',
        ]);

        $user = User::where('id',Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nohp = $request->nohp;
        $user->alamat = $request->alamat;
        if (!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }
        
        $user->update();
        alert()->success('Profil Berhasil Diupdate', 'Sukses');
        return redirect('profile');

    }
   
}
