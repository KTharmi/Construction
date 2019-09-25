<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
         $roles = auth()->user()->roles->pluck('id')->toArray();
         if(in_array(1, $roles)){
             return view('admin.home');
         }else if(in_array(2, $roles)){
            return view('engineer.home');
        }else if(in_array(3, $roles)){
            return view('CManager.home');
        }else if(in_array(4, $roles)){
            return view('estimator.home');
        }else if(in_array(5, $roles)){
            return view('architect.home');
        }
    }
}
