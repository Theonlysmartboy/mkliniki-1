<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    //
    public function index(){
        if(Auth::user()){
            $title="Services";
            $services = Service::get();
            return view('service.index',compact('services','title'));
        }else{
            return redirect('login');
        }

    }
    //
    public function store(Request $request){
        $data=$request->all();
        $service = new Service;
        $service->name=$data['service_name'];
        $service->description=$data['service_description'];
        $service->save();
        


    }
}
