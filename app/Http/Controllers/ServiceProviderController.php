<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceProvider;

class ServiceProviderController extends Controller
{
    public function index(){
        $provider = ServiceProvider::get();
        return view('serviceprovider.index',compact('provider'));
    }
}
