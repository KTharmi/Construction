<?php

namespace App\Http\Controllers\User\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuildingDrawingController extends Controller
{
    public function index()
    {
        return view('user.services.buildingDrawings');
    }
}
