<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    //
    public function index(){
        $user = User::where('level','perusahaan')->get();
        return view('admin.monitoring', compact('user'));
    }
}
