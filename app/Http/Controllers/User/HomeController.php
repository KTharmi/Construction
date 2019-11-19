<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\DB;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        
        return view('user.home');
    }

    public function about()
    {
        return view('user.about');
    }

    public function contact()
    {
        return view('user\contact');
    }
}
