<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Models\Ward;
use App\Models\Service;
use App\Models\County;
use App\Models\SubCounty;
use Illuminate\Support\Facades\Auth;

use DB;

class ServiceProviderController extends Controller
{
    public function index(){
        if(Auth::user()){
        $county_dropdown= "<option selected>Select County</option>";
        $subcounty_dropdown ="<option selected>Select Sub County</option>";
        $ward_dropdown ="<option selected>Select Ward</option>";
        $counties=County::get();
        $subcounties= SubCounty::get();
        $wards=Ward::get();
        foreach($counties as $county){
            $county_dropdown .="<option class='bg-ready value='".$county->id."'>". $county->name."</option>";
        }
        foreach($subcounties as $subcounty){
            $subcounty_dropdown .="<option class='bg-ready value='".$subcounty->id."'>". $subcounty->name."</option>";
        }
        foreach($wards as $ward ){
            $ward_dropdown .= "<option class='bg-ready value='".$ward->id."'>". $ward->name."</option>";
        }
        $services=Service::get();
        $title="Services";
        $service_providers = DB::table('service_providers')
        ->join('wards', 'service_providers.ward', 'wards.id')
        ->join('categories', 'service_providers.category', 'categories.id')
        ->select('service_providers.*', 'wards.name As ward_name', 'categories.name As category_name')
        ->get();
        
            return view('serviceprovider.index',compact('service_providers','title','ward_dropdown','county_dropdown','subcounty_dropdown','ward_dropdown'));

        }
        else {
            return redirect('login');
        }
    
    }
    public function getSubcounties(County $county){
        
    }
    public function getWards(SubCounty $subcounty){

    }
}
