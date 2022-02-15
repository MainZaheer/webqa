<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function dashboard(){
        return view("dashboard");
    }
    
    public function welcome(){
        return view("welcome");
    }

    public function privacy(){
        return view("privacy");
    }

    public function terms(){
        return view("terms");
    }

    public function onboarding(){
        $user = Auth::user();
        return view("user.onboarding.index", compact("user", $user));
    }
}
