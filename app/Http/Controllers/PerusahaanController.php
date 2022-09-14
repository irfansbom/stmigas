<?php

namespace App\Http\Controllers;

use App\Models\Kabs;
use App\Models\Perusahaan;
use App\Models\User_Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class PerusahaanController extends Controller
{
    //
    public function index()
    {
        Paginator::useBootstrap();
        $auth = Auth::user();
        if (in_array('Semua List', $auth->getPermissionsViaRoles()->pluck('name')->toArray())) {
            $perusahaan = Perusahaan::paginate(15);
        } else {
            $id_perus = User_Perusahaan::where('id_user', $auth->id)->pluck('id_perusahaan')->toArray();
            $perusahaan = Perusahaan::whereIn('id', $id_perus)->paginate(15);
        }

        return view('admin.perusahaan.index', compact('perusahaan', 'auth'));
    }

    public function create()
    {
        $auth = Auth::user();
        $perusahaan = new Perusahaan();
        $kabs = Kabs::all();
        return view('admin.perusahaan.create', compact('perusahaan', 'auth', 'kabs'));
    }

    public function store(Request $request)
    {
        $auth = Auth::user();
        $affected_rows = Perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'email_perusahaan' => $request->email_perusahaan,
            'alamat_kantor' => $request->alamat_kantor,
            'alamat_pusat' => $request->alamat_pusat,
            'kd_kab' => $request->kd_kab,
            'telepon_perusahaan' => $request->telepon_perusahaan,
            'telepon_pusat' => $request->telepon_pusat,
            'cp_nama' => $request->cp_nama,
            'cp_no_hp' => $request->cp_no_hp,
            'created_by' => $auth->email,
        ]);
        // dd($affe)
        if ($affected_rows) {
            return redirect('perusahaan')->with('message', 'Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Gagal Disimpan');
        }
    }

    public function show($id)
    {
        $auth = Auth::user();
        $id = Crypt::decryptString($id);
        $perusahaan = Perusahaan::find($id);
        $kabs = Kabs::all();
        return view('admin.perusahaan.show', compact('perusahaan', 'id', 'kabs', 'auth'));
    }
    public function update(Request $request)
    {
        $auth = Auth::user();
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
            return redirect('perusahaan')->with('message', 'Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Gagal Disimpan');
        }
    }

    public function destroy(Request $request)
    {
        // dd($request->all());
        $affected_rows = Perusahaan::find($request->id)->delete();
        return redirect()->back()->with('message', 'Berhasil Dihapus');
    }
}
