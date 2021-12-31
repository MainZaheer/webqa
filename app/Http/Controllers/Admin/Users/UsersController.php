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


    public function delete($id){
        User::where('id',$id)->delete();
        return redirect()->back()->with("success", "User Deleted Successfully");
    }
}
