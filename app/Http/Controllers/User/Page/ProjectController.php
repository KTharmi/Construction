<?php

namespace App\Http\Controllers\User\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        return view('user.pages.project');
    }
}
