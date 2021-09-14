<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubCountyController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix'=> 'userApi'], function(){
    Route::get('/', [UserController::class, 'indexApi'])->name('userapi');
});
Route::group(['prefix'=> 'serviceApi'], function(){
    Route::get('/', [ServiceController::class, 'indexApi'])->name('serviceapi');
});
Route::group(['prefix'=> 'serviceProviderApi'], function(){
    Route::get('/', [ServiceProviderController::class, 'indexApi'])->name('serviceproviderapi');
});
Route::group(['prefix'=> 'countyApi'], function(){
    Route::get('/', [CountyController::class, 'indexApi'])->name('countyapi');
});
Route::group(['prefix'=>'subcountyApi'],function(){
    Route::get('/',[SubCountyController::class, 'indexApi']);
});
Route::group(['prefix'=>'wardApi'],function(){
    Route::get('/',[WardController::class ,'indexApi']);
});
    //Route::get
Route::group(['prefix'=>'userregisterApi'],function(){
        Route::post('/',[RegisterController::class ,'createApi']);

});
Route::group(['prefix'=>'userloginApi'],function(){
    Route::post('/',[LoginController::class ,'loginApi']);
});

Route::group(['prefix'=>'analytics'],function(){
    Route::post('/store',[LoginController::class ,'store']);
});

