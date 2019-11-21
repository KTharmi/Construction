<?php

namespace App\Http\Controllers\Manager;

use App\Note;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoteController extends Controller
{
    public function note()
    {
        $projects = Project::get()->pluck('ProName','id')->toArray(); 
        return view('CManager.project.note', compact('projects'));
    }
    public function store(Request $request)
    {
       // dd($request);
    $note = new Note();
    $note->setAttribute('project_id', $request->input('project_name'));
    $note->setAttribute('date', $request->input('date'));
    $note->setAttribute('note', $request->input('note'));
    $note->save();

    return view('CManager.project.notification');
    }
}
