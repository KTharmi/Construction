<?php

namespace App\Http\Controllers\User\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElementsController extends Controller
{
    public function index()
    {
        return view('user.pages.elements');
    }
}
