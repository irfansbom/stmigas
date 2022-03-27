<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
