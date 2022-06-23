<?php

namespace App\Http\Controllers;

use App\Models\Kabs;
use App\Models\Perusahaan;
use App\Models\User;
use App\Models\User_Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        $auth = Auth::user();
        if (in_array('Semua List', $auth->getPermissionsViaRoles()->pluck('name')->toArray())) {
            $user = User::orderBy('nama')->paginate(15);
        } else {
            $id_perus = $auth->perusahaan->pluck('id')->toArray();
            $id_user = User_Perusahaan::whereIn('id_perusahaan', $id_perus)
                ->select('id_user')
                ->groupby('id_user')
                ->get();
            $user = User::whereIn('id', $id_user)->orderBy('nama')->paginate(15);
        }
        $data_roles = Role::all();
        $data_perusahaan = Perusahaan::all();
        return view('admin.user.index', compact('user', 'data_roles', 'data_perusahaan', 'auth'));
    }

    public function create()
    {
        $auth = Auth::user();
        $user = new User();
        $data_roles = Role::all();
        if (in_array('Super Admin', $auth->getRoleNames()->toArray())) {
            $data_perusahaan = Perusahaan::all();
        } else {
            $data_perusahaan = User_Perusahaan::where('id_user', $auth->id)
                ->join('perusahaan', 'perusahaan.id', 'id_perusahaan')
                ->get();
        }
        
        return view('admin.user.create', compact('data_roles', 'data_perusahaan', 'user', 'auth'));
    }


    public function store(Request $request)
    {
        $auth = Auth::user();
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'divisi_fungsi' => $request->divisi_fungsi,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password),
            'created_by' => $auth->email,
        ]);
        foreach ($request->perusahaan as $perus) {
            User_perusahaan::create(['id_user' => $user->id, 'id_perusahaan' => $perus]);
        }

        return redirect('user')->with('message', 'Berhasil Disimpan');
    }

    public function show($id)
    {
        $auth = Auth::user();
        $id = Crypt::decryptString($id);
        $user = User::where('id', $id)->first();
        return view('admin.user.show', compact('user', 'id', 'auth'));
    }

    public function update(Request $request)
    {
        $auth = Auth::user();
        User::where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'divisi_fungsi' => $request->divisi_fungsi,
                'no_hp' => $request->no_hp,
                'updated_by' => $auth->email,
            ]);
        return redirect()->back()->with('message', 'Berhasil Disimpan');
    }

    public function delete(Request $request)
    {
        User::where('id', $request->user_id)->delete();
        return redirect()->back()->with('message', 'Berhasil Dihapus');
    }


    public function ubahpassword(Request $request)
    {
        User::where('id', $request->id)
            ->update([
                'password' => Hash::make($request->password),
            ]);
        return redirect()->back()->with('message', 'Berhasil Disimpan');
    }

    public function resetpassword(Request $request)
    {
        User::where('id', $request->id)
            ->update([
                'password' => Hash::make('password'),
            ]);
        return redirect()->back()->with('message', 'Berhasil Disimpan');
    }

    public function user_roles(Request $request)
    {
        $user = User::find($request->user_id);
        $user->syncRoles([$request->roles]);
        return redirect('user/')->with('message', 'User berhasil diperbaharui.');
    }

    public function user_perusahaan(Request $request)
    {
        $user = User::find($request->user_id);
        User_Perusahaan::where('id_user', $request->user_id)->delete();
        if ($request->user_perusahaan) {
            foreach ($request->perusahaan as $perus) {
                User_perusahaan::create(['id_user' => $request->user_id, 'id_perusahaan' => $perus]);
            }
        }

        return redirect('user/')->with('message', 'User berhasil diperbaharui.');
    }

    public function roles()
    {
        $auth = Auth::user();
        $data_roles = [];
        $roles = Role::all();
        foreach ($roles as $role) {
            $permissions = $role->permissions()->get();
            $data_role = [
                'id' => $role->id,
                'name' => $role->name,
                'guard_name' => $role->guard_name,
                'created_at' => $role->created_at,
                'updated_at' => $role->updated_at,
                'permissions' => $permissions
            ];
            array_push($data_roles, $data_role);
        }
        $data_permission = Permission::all();
        return view('admin/roles', compact('data_roles', 'data_permission', 'auth'));
    }

    public function roles_add(Request $request)
    {
        $role = Role::create(['name' => $request->name, 'guard_name' => $request->guard_name]);
        $role->givePermissionTo($request->permissions);
        return redirect()->back()->with('message', 'Berhasil Disimpan');
    }

    public function roles_edit(Request $request)
    {
        $role =  Role::find($request->id);
        Role::where('id', $request->id)->update(['name' => $request->name]);
        $role->syncPermissions($request->permissions);
        return redirect()->back()->with('message', 'Berhasil Disimpan');
    }

    public function roles_delete(Request $request)
    {
        Role::where('id', $request->id)->delete();
        return redirect()->back()->with('message', 'Berhasil Disimpan');
    }

    public function permissions()
    {
        $auth = Auth::user();
        $permission = Permission::all();
        return view('admin/permissions', compact('permission', 'auth'));
    }

    public function permissions_add(Request $request)
    {
        Permission::create(['name' => $request->name, 'guard_name' => $request->guard_name]);
        return redirect()->back()->with('message', 'Berhasil Disimpan');
    }

    public function permissions_delete(Request $request)
    {
        $affectedRows = Permission::where('id', $request->id)->delete();
        if ($affectedRows > 0) {
            return redirect()->back()->with('message', 'Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Gagal Disimpan');
        }
    }
}
