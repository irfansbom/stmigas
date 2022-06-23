<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use App\Models\User;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    //
    public function index(){
        $user = Perusahaan::all();
        return view('admin.monitoring', compact('user'));
    }
}
