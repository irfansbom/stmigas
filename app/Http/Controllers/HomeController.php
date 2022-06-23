<?php

namespace App\Http\Controllers;

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
        if (in_array('Super Admin', $auth->getRoleNames()->toArray())) {
            $survey = Survey::all();
        } else {
            $survey = Survey::where('id_user', $auth->id)->get();
        }
        $perusahaan = User_Perusahaan::where('id_user', $auth->id)
            ->join('perusahaan', 'perusahaan.id', 'id_perusahaan')
            ->get();
        // dd($perusahaan);
        return view('home', compact('user', 'survey', 'auth', 'perusahaan'));
    }
}
