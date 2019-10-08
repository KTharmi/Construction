<?php

namespace App\Http\Controllers\User\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaintingController extends Controller
{
    public function index()
    {
        return view('user.services.paintingConstructions');
    }
}
