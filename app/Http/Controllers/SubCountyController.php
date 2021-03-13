<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\County;
use App\Models\SubCounty;

use Response;
use DB;


class SubCountyController extends Controller
{
    public function index(){
        if(Auth::user()){
            $title="Sub Counties";
            $subcounties=SubCounty::all();
            $county_dropdown= "<option selected>Select County</option>";
            $counties=County::get();
            foreach($counties as $county){
                $county_dropdown .="<option class='bg-ready value='".$county->id."'>". $county->name."</option>";
            }
            
            return view('subcounty.index',compact('subcounties','county_dropdown','title'));
            
    }
    else {
        return redirect('login');
    }
}
public function indexApi(Request $request){
    $county=$request->input('county');
    $subcounties=DB::table('sub_counties')
    ->where('county',$county)
    ->select('id','name')
    ->get();

   // return Response::json(array('subcounties',$subcounties));
    return Response::json(array('subcounties'=>$subcounties));
}

}
