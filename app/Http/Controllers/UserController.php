<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function viewUser(){
        return view('admin.user.index',[
            'users'=>User::all()
        ]);
    }
    public static function addUser(){
        return view('admin.user.create');
    }

    public static function storeUser(Request $request){
        User::saveInfo($request);
        return redirect(route('view_user'));
    }
}
