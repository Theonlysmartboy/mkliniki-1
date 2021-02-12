<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use DB;

class ServiceProviderController extends Controller
{
    public function index(){
        $service_providers = DB::table('service_providers')
        ->join('wards', 'service_providers.ward', 'wards.id')
        ->join('categories', 'service_providers.category', 'categories.id')
        ->select('service_providers.*', 'wards.name As ward_name', 'categories.name As category_name')
        ->get();
        return view('serviceprovider.index',compact('service_providers'));
    }
}
