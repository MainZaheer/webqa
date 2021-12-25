<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
