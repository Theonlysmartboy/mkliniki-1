<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\SubCountyController;
use App\Http\Controllers\WardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $title = "Home";
    return view('auth.login',compact('title'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.home');
    
});
//service route group
Route::group(['prefix' => 'service'], function () {
    Route::get('/', [ServiceController::class, 'view'])->name('service');
    Route::post('/', [ServiceController::class, 'store'])->name('service.store');
    
});
//service provider route group
Route::group(['prefix' => 'serviceprovider'], function () {
    Route::get('/', [ServiceProviderController::class, 'view'])->name('provider');
    Route::post('/', [ServiceProviderController::class, 'store'])->name('provider.store');
    
});
//county route group
Route::group(['prefix' => 'county'], function () {
    Route::get('/', [CountyController::class, 'view'])->name('county');
    Route::post('/', [CountyController::class, 'store'])->name('county.store');
    
});
//sub county route group
Route::group(['prefix' => 'subcounty'], function () {
    Route::get('/', [SubCountyController::class, 'view'])->name('subcounty');
    Route::post('/', [SubCountyController::class, 'store'])->name('subcounty.store');
    
});
//Ward route group
Route::group(['prefix' => 'ward'], function () {
    Route::get('/', [WardController::class, 'view'])->name('ward');
    Route::post('/', [WardController::class, 'store'])->name('ward.store');
    
});
