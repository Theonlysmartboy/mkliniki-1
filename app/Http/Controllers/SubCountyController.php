<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCountyController extends Controller
{
    public function index(){
        if(Auth::user()){
            $title="Sub Counties";
            $county_dropdown= "<option selected>Select County</option>";
            $counties=County::get();
            foreach($counties as $county){
                $county_dropdown .="<option class='bg-ready value='".$county->id."'>". $county->name."</option>";
            }
            
            return view('subcounty.index',compact('counties','county_dropdown'));
            
    }
    else {
        return redirect('login');
    }
}
}
