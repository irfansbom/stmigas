<?php

namespace App\Http\Controllers;

use App\Models\Kabs;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class PerusahaanController extends Controller
{
    //
    public function index()
    {
        $auth = Auth::user();
        if (in_array('Super Admin', $auth->getRoleNames()->toArray())) {
            $perusahaan = Perusahaan::all();
        } else {
            $id_perus = $auth->perusahaan->pluck('id')->toArray();
            $perusahaan = Perusahaan::whereIn('id', $id_perus)->get();
        }
        return view('admin.perusahaan', compact('perusahaan', 'auth'));
    }

    public function show($id)
    {
        $auth = Auth::user();
        $id = Crypt::decryptString($id);
        $perusahaan = Perusahaan::find($id);
        $kabs = Kabs::all();
        return view('admin.perusahaanshow', compact('perusahaan', 'id', 'kabs', 'auth'));
    }

    public function store(Request $request)
    {
        $auth = Auth::user();
        // dd($request->nama_perusahaan);
        $affected_rows = Perusahaan::where('id', $request->id)
            ->update([
                'nama_perusahaan' => $request->nama_perusahaan,
                'email_perusahaan' => $request->email_perusahaan,
                'alamat_kantor' => $request->alamat_kantor,
                'alamat_pusat' => $request->alamat_pusat,
                'kd_kab' => $request->kd_kab,
                'telepon_perusahaan' => $request->telepon_perusahaan,
                'telepon_pusat' => $request->telepon_pusat,
                'cp_nama' => $request->cp_nama,
                'cp_no_hp' => $request->cp_no_hp,
                'updated_by' => $auth->email,
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        if ($affected_rows) {
            return redirect()->back()->with('message', 'Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Gagal Disimpan');
        }
    }
}
