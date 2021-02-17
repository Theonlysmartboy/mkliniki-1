<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\County;
use Illuminate\Support\Facades\Auth;

class CountyController extends Controller
{
    public function index(){
        if(Auth::user()){
            $title="Counties";
            $counties=County::get();
    
            return view('county.index',compact('counties','title'));
        }
        else {
            return redirect('login');
        }
    }
    
}
