<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function buildingServices()
    {
        return view('user.services.buildingDrawings');
    }

    public function electricalServices()
    {
        return view('user.services.electricalServices');
    }

    public function paintingServices()
    {
        return view('user.services.paintingConstructions');
    }

    public function plumbingServices()
    {
        return view('user.services.plumbingConstructions');
    }

    public function roofingServices()
    {
        return view('user.services.roofingConstructions');
    }

    public function tilesFittingsServices()
    {
        return view('user.services.tilesFittings');
    }

}
