<?php

namespace App\Http\Controllers\Manager;

use App\Project;
use App\Labourer;
use App\Labourer_schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaborerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get()->pluck('ProName','id')->toArray();
        $labourers = Labourer::all();
        return view('CManager/labourerSch',compact('labourers','projects'));
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
       
        $type =$request->input('yes');
        
        for($i=0; $i< count(collect($type)); $i++)
        {
         $labourer_schedule = new Labourer_schedule();
         $num=(int)$type[$i];
         $labourer_schedule->setAttribute('LabId', $num);
         $labourer_schedule->setAttribute('ProId', $request->input('project_name'));
         $labourer_schedule->setAttribute('WorkingDate', $request->input('date'));
         $labourer_schedule->save();
         }
         $proId =$request->input('project_name');
         $projectid=Project::where('id', '=',  $proId )->first()->id;
          return  redirect()->route('CManager.labourerSch.show' , ['projectid' =>$projectid ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $labourer_schedule = Labourer_schedule::where('ProId',$id)->select('LabId')->with('labourers')->distinct()->get();
        return view('CManager/schuduleview', compact('labourer_schedule'));
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
