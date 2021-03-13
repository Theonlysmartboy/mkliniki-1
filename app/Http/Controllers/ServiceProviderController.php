<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Models\Ward;
use App\Models\Service;
use App\Models\County;
use App\Models\SubCounty;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

use Response;

use DB;

class ServiceProviderController extends Controller
{
    public function index(){
        if(Auth::user()){
        $county_dropdown= "<option selected>Select County</option>";
        $subcounty_dropdown ="<option selected>Select Sub County</option>";
        $ward_dropdown ="<option selected>Select Ward</option>";
        $category_dropdown ="<option selected>Select Category</option>";
        $counties=County::get();
        $subcounties= SubCounty::get();
        $wards=Ward::get();
        $categories=Category::get();
        foreach($counties as $county){
            $county_dropdown .="<option class='bg-ready' value='".$county->id."'>". $county->name."</option>";
        }
        foreach($subcounties as $subcounty){
            $subcounty_dropdown .="<option class='bg-ready' value='".$subcounty->id."'>". $subcounty->name."</option>";
        }
        foreach($wards as $ward ){
            $ward_dropdown .= "<option class='bg-ready' value='".$ward->id."'>". $ward->name."</option>";
        }
        foreach($categories as $category){
            $category_dropdown.="<option class='bg-ready' value='".$category->id."'>". $category->name."</option>";
        }
        $services=Service::get();
        $title="Service Providers";
        $service_providers = DB::table('service_providers')
        ->join('wards', 'service_providers.ward', 'wards.id')
        ->join('categories', 'service_providers.category', 'categories.id')
        ->select('service_providers.*', 'wards.name As ward_name', 'categories.name As category_name')
        ->get();
        
            return view('serviceprovider.index',compact('service_providers','title','ward_dropdown','county_dropdown','subcounty_dropdown',
            'ward_dropdown','category_dropdown'));

        }
        else {
            return redirect('login');
        }
    
    }
    public function indexApi(Request $request){
        
        $ward=$request->input('ward');
        $category=$request->input('category');
        $town =$request->input('town');;//$_request['ward'];
        /*The serach should either be a town or a ward*/
        $service_providers = DB::table('service_providers')
        ->join('wards', 'service_providers.ward', 'wards.id')
        ->join('categories', 'service_providers.category', 'categories.id')
        ->where('ward',$ward)
        ->where('category',$category)
        //->where('town',$town);
        ->select('service_providers.*', 'wards.name As ward', 'categories.name As category')
        ->get();

        return response::json(array('serviceproviders'=>$service_providers));

    }
    public function store(Request $request){
        $rules=array(

        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        return response::json(array('errors'=>$validator->getMessageBag()->toarray()));
        else{
        $data = $request->all();
        $serviceprovider = new ServiceProvider;
        $serviceprovider->name=$data[''];
        $serviceprovider->registration_details=$data[''];
        $serviceprovider->age=$data['age'];   
        $serviceprovider->gender=$data['gender'];
        $serviceprovider->address=$data['address'];
        $serviceprovider->email=$data['email'];
        $serviceprovider->telephone=$data['telephone'];
        $serviceprovider->website=$data['website'];
        $serviceprovider->ward=$data['ward'];
        $serviceprovider->town=$data['town'];   
        $serviceprovider->category=$data['category'];
        $serviceprovider->duration=$data['durationn'];

        $serviceprovider->save();

        return response()->json($serviceprovider);

    }


    }
    public function getSubcounties(County $county){
        
    }
    public function getWards(SubCounty $subcounty){

    }
}
