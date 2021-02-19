<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facedes\input;
use Validator;
use Response;
use App\http\Requests;


class ServiceController extends Controller
{
    //
    public function index(){
        if(Auth::user()){
            $title="Services";
            $services = Service::all();
            return view('service.index',compact('services','title'));
        }else{
            return redirect('login');
        }

    }
    //
    public function store(Request $request){
        $rules = array(
            'service_name'=>'required',
            'service_description'=>'required',
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        return response::json(array('errors'=>$validator->getMessageBag()->toarray()));
        else{
            $data=$request->all();
            $service = new Service;
            $service->name=$data['service_name'];
            $service->description=$data['service_description'];
            //$count = Service::count();
            $service->save();
            return response()->json($service);
        }
    }
}
