<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function index(){
        $user = User::where('level','perusahaan')->get();
        return view('admin.user', compact('user'));
    }

    public function show($id){
        $id = Crypt::decryptString($id);
        $user= User::where('id', $id)->first();
        return view('admin.usershow',compact('user', 'id'));

    }
    public function store(Request $request){
        $auth = Auth::user();
        // dd($request->nama_perusahaan);
        User::where('id', $request->id)
        ->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat_kantor' => $request->alamat_kantor,
            'alamat_pusat' => $request->alamat_pusat,
            'cp_nama' => $request->cp_nama,
            'cp_no_hp' => $request->cp_no_hp,
            'updated_by' => $auth->email,
            'updated_at' => date("Y-m-d H:i:s"),

            ]);
        return redirect()->back()->with('message', 'Berhasil Disimpan');
    }

    public function resetpassword(Request $request){
        User::where('id', $request->id)
        ->update([
            'password'=> Crypt::encrypt("password"),
        ]);
        return redirect()->back()->with('message', 'Berhasil Disimpan');
    }

}
