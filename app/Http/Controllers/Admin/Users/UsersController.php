<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function view(){
        $users = User::all();
        return view("admin.users.view", compact("users"));
    }
}
