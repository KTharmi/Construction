<?php

namespace App\Http\Controllers\Admin;
use App\Project;
use App\Http\Requests\ProjectStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin/project/index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ProjectStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectStoreRequest $request)
    {
        $project = new Project();
        $project->setAttribute('ProId', $request->input('ProId'));
        $project->setAttribute('ProName', $request->input('ProName'));
        $project->setAttribute('ProAddress', $request->input('ProAddress'));
        $project->setAttribute('describtion', $request->input('describtion'));
        $project->save();

        return response()->redirectToRoute('admin.project.view');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.project.update',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectStoreRequest $request, Project $Project)
    {
        $project->setAttribute('ProName', $request->input('ProName'));
        $project->setAttribute('ProAddress', $request->input('ProAddress'));
        $project->setAttribute('describtion', $request->input('describtion'));
        $project->save();

        return response()->redirectToRoute('admin.project.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Project $project)
    {
        return view('admin.project.delete', compact('project'));
    }
    public function destroy(ProjectStoreRequest $request, Project $project)
    {
        $project->delete();
        return response()->redirectToRoute('admin.project.view');
    }
}

