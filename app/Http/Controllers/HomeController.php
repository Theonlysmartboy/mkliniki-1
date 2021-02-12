<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if(Auth::user()){
            if ($request->user()->hasRole('user')) {
                return view('home');
            }
            if ($request->user()->hasRole('admin')){
                return redirect('/admin');
            }
            if ($request->user()->hasRole('super admin')){
                return redirect('/master');
            }
        }
    }
}
