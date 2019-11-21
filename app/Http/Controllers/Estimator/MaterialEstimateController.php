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
        $matId = Material_assignment::get()->pluck('MatId')->toArray();


        return view('estimator/estimate/materialEstimate',compact('projects','id'));
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
        
        $type =$request->input('yes');
        for($i=0; $i< count(collect($type)); $i++)
        {
         $material_assignment = new Material_assignment();
         $num=(int)$type[$i];
         $material_assignment->setAttribute('MatId', $num);
         $material_assignment->setAttribute('ProId', $request->input('project_name'));
         $material_assignment->save();
         }
      
        return response()->redirectToRoute('estimator.estimate.material');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $material_assignment = Material_assignment::all();

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
