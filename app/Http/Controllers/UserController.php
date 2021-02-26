<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        if (Auth::user()){
            $title = "";
            $users = User::all();
            return view('user.index',compact('title','users'));

        }
        else
        return redirect('login');
        

    }
}
