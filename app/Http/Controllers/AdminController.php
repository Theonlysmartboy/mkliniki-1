<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $title = "admin.dashboard";
        return view('admin.dashboard',compact('title'));
    }
}
