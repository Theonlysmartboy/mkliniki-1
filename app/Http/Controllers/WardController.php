<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\County;
use App\Models\SubCounty;
use App\Models\Ward;

use Response;
use DB;

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
    public function indexApi(Request $request){
        $subcounty= $request->input('subcounty');
        //$subcounty='1';
        $wards=DB::table('wards')
        ->where('sub_county',$subcounty)
        ->select('id','name')
        ->get();

        return Response::json(array('wards'=>$wards));

    }
    public function store(){

    }
}
