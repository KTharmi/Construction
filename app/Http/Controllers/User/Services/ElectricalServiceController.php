<?php

namespace App\Http\Controllers\User\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElectricalServiceController extends Controller
{
    public function index()
    {
        return view('user.services.electricalServices');
    }
}