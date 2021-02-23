<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\County;
use Illuminate\Support\Facades\Auth;
use Validator;
use Response;
use App\http\Requests;

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
    public function store(Request $request){
        $rules=array(
            'county_name'=>'required',
            'county_code'=>'required',
            'county_description'=>'required',
            'county_emblem'=>'required',
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        return response::json(array('errors'=>$validator->getMessageBag()->toarray()));
        else{
            $data=$request->all();

            $county = new County();
            
            $county->name = $data['county_name'];
            $county->code = $data['county_code'];
            $county->desc = $data['county_description'];
            $county->emblem = $data['county_emblem'];

            $county->save();

            return response()->json($county);

        }
    }
    
}
