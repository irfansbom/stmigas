<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function index(){
        // dd(Auth());
        $user = Auth::user();
        // dd($user);
        return view('profile', compact('user'));
    }

    public function store(Request $request){
        $request;
        return redirect()->back()->with('message', 'Berhasil Disimpan');
    }

    public function ubahpassword(Request $request){
        $user = Auth::user();
        if (Hash::check($request->password_lama, $user->password)) {
            User::where('email',$user->email)
            ->update(['password' => Hash::make($request->password)]);
            return redirect()->back()->with('message', 'Berhasil Disimpan');
        }else{
            return redirect()->back()->with('error', 'Password Salah');
        }
    }
}
