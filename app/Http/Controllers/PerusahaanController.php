<?php

namespace App\Http\Controllers;

use App\Exports\PerusahaanExport;
use App\Models\Kabs;
use App\Models\Perusahaan;
use App\Models\User_Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Maatwebsite\Excel\Facades\Excel;

class PerusahaanController extends Controller
{
    //
    public function index(Request $request)
    {
        Paginator::useBootstrap();
        $auth = Auth::user();

        if (in_array('Semua List', $auth->getPermissionsViaRoles()->pluck('name')->toArray())) {
            $perusahaan = Perusahaan::orderby('no_urut')->where('nama_perusahaan','LIKE','%'.$request->filter_nama.'%')->paginate(15);
        } else {
            $id_perus = User_Perusahaan::where('id_user', $auth->id)->pluck('id_perusahaan')->toArray();
            $perusahaan = Perusahaan::whereIn('id', $id_perus)->orderby('no_urut')->paginate(15);
        }

        return view('admin.perusahaan.index', compact('perusahaan', 'auth', 'request'));
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
            'nib' => $request->nib,
            'kd_kab' => $request->kd_kab,
            'kd_kec' => $request->kd_kec,
            'kd_desa' => $request->kd_desa,

            'alamat_perusahaan' => $request->alamat_perusahaan,
            'kode_pos_perusahaan' => $request->kode_pos_perusahaan,
            'email_perusahaan' => $request->email_perusahaan,
            'telepon_perusahaan' => $request->telepon_perusahaan,
            'fax_perusahaan' => $request->fax_perusahaan,

            'alamat_pusat' => $request->alamat_pusat,
            'kode_pos_pusat' => $request->kode_pos_pusat,
            'email_pusat' => $request->email_pusat,
            'telepon_pusat' => $request->telepon_pusat,
            'fax_pusat' => $request->fax_pusat,
            'created_by' => $auth->email,
        ]);
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
    public function update($id,Request $request)
    {
        // dd($id);
        $auth = Auth::user();
        $affected_rows = Perusahaan::where('id', $id)
            ->update([
                'nama_perusahaan' => $request->nama_perusahaan,
                'nib' => $request->nib,
                'kd_kab' => $request->kd_kab,
                'kd_kec' => $request->kd_kec,
                'kd_desa' => $request->kd_desa,

                'alamat_perusahaan' => $request->alamat_perusahaan,
                'kode_pos_perusahaan' => $request->kode_pos_perusahaan,
                'email_perusahaan' => $request->email_perusahaan,
                'telepon_perusahaan' => $request->telepon_perusahaan,
                'fax_perusahaan' => $request->fax_perusahaan,

                'alamat_pusat' => $request->alamat_pusat,
                'kode_pos_pusat' => $request->kode_pos_pusat,
                'email_pusat' => $request->email_pusat,
                'telepon_pusat' => $request->telepon_pusat,
                'fax_pusat' => $request->fax_pusat,

                'cp_nama' => $request->cp_nama,
                'cp_no_hp' => $request->cp_no_hp,
                'updated_by' => $auth->email,
            ]);
        if ($affected_rows) {
            return redirect('perusahaan')->with('message', 'Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Gagal Disimpan');
        }
    }

    public function destroy(Request $request)
    {
        $affected_rows = Perusahaan::find($request->id)->delete();
        return redirect()->back()->with('message', 'Berhasil Dihapus');
    }

    public function export(Request $request)
    {
        return Excel::download(new PerusahaanExport, 'perusahaan.xlsx');
    }
}
