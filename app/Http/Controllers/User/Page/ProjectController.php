<?php

namespace App\Http\Controllers\User\Page;

use Illuminate\Http\Request;
use App\Project;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all()->toArray();
        return view('user.pages.project',compact('projects'));
    }
}
