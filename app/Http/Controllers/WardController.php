<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\County;
use App\Models\SubCounty;
use App\Models\Ward;

class WardController extends Controller
{
    public function index(){
        if(Auth::user()){
        $title="Ward";
        $wards=Ward::all();
        $subcounty_dropdown="<option selected>Select SubCounty</option>";
        $subcounties=SubCounty::get();
        foreach($subcounties as $subcounty){
            $subcounty_dropdown.="<option class='bg-ready' value='".$subcounty->id."'>".$subcounty->name."</option>";
        }
        $county_dropdown= "<option selected>Select County</option>";
            $counties=County::get();
            foreach($counties as $county){
                $county_dropdown .="<option class='bg-ready' value='".$county->id."'>". $county->name."</option>";
            }

        return view('ward.index',compact('title','wards','subcounty_dropdown','county_dropdown'));
        }
        else{
            return redirect('login');
        }
    }
    public function store(){

    }
}
