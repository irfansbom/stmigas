<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        // dd($user->level == 'admin');
        if($user->level == 'admin'){
            $survey = Survey::all();
        }
        // $survey = Survey::where('email',$user->email)->get();
        else{
            $survey = Survey::where('email',$user->email)->get();
        }

        // return view('dashboard', compact('user', 'survey'));
        return view('home', compact('user', 'survey'));
    }
}
