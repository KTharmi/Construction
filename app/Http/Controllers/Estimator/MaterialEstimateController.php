<?php

namespace App\Http\Controllers\Estimator;

use App\Material;
use App\Project;
use App\Material_assignment;
use App\Http\Requests\ProjectMaterialStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterialEstimateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get()->pluck('ProName','id')->toArray();
        $materials = Material::all();
        return view('estimator.estimate.materialEstimate',compact('materials','projects'));
    }

    public function selection()
    {
        $projects = Project::get()->pluck('ProName','id')->toArray();
        $materials = Material::all();
        return view('estimator.estimate.materialSelection', compact('materials','projects'));
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
     * @param  \Illuminate\Http\ProjectMaterialStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function selectionStore(ProjectMaterialStoreRequest $request)
    {
        
      $material_assignment = new Material_assignment();
      $ProId = $request->input('project_name');
      $type =$request->input('yes');
      if($type=='yes'){
            dd($type);
      }
      
        return view('estimator.estimate.materialEstimate');
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
