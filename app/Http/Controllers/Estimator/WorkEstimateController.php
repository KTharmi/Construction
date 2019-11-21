<?php

namespace App\Http\Controllers\Estimator;

use App\Project;
use App\Work;
use App\Work_assignment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkEstimateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get()->pluck('ProName','id')->toArray();
        $works = Work::all();
        return view('estimator.estimate.taskEstimate',compact('projects','works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $proId =$request->input('project_name');
        $type =$request->input('Unit');
        dd($type);
          $projectid=Project::where('id', '=',  $proId )->first()->id;
          return  redirect()->route('estimator.estimate.show' , ['projectid' =>$projectid ]);

        $work_assignment = new Work_assignment();
         $work_assignment->setAttribute('MatId', $id);
         $work_assignment->setAttribute('ProId', $request->input('project_name'));
         $work_assignment->setAttribute('Qty', $request->input('Unit'));
         $work_assignment->save();
        
        return view('estimator/estimate/taskEstimateCost', compact('work_assignments'));
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
