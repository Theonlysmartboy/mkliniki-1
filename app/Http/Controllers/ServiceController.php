<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //
    public function add(){
        return view('service.add');

    }
    //
    public function store(Request $request){
        $data=$request->all();
        //dd($data);
        $service = new Service;
        $service->name=$data['service_name'];
        $service->description=$data['service_description'];
        $service->save();
        //dd($service);

        echo "service added";


    }
}
