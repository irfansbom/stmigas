<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use App\Models\Survey;
use App\Models\User_Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        $auth = Auth::user();
        $user = Auth::user();
        if (in_array('Semua List', $auth->getPermissionsViaRoles()->pluck('name')->toArray())) {
            $survey = Survey::all();
            $perusahaan = Perusahaan::all();
        } else {
            $id_perus =  User_Perusahaan::where('id_user', $auth->id)->pluck('id_perusahaan')->toArray();
            $perusahaan = Perusahaan::whereIn('id', $id_perus)->get();
            $survey = Survey::whereIn('id_perusahaan', $id_perus)->get();
        }
        return view('home', compact('user', 'survey', 'auth', 'perusahaan'));
    }
}
