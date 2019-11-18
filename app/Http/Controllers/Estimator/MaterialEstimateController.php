<?php

namespace App\Http\Controllers\Estimator;

use App\Material;
use App\Project;
use App\Material_assignment;
use App\Http\Requests\ProjectMaterialStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        //dd($request);
      $material_assignment = new Material_assignment();
      $ProId = $request->input('project_name');
      $materialId = $request->input('id');
        
      $type =$request->input('yes');
      
      
        //print_r($ProId);
        
        //$material_assignment->setAttribute('MatId', $request->input('id'));
        $material_assignment->setAttribute('ProId', $ProId);
        //$material_assignment->setAttribute('Qty', 2);

        //$material_assignment->save();

        
                // $labourer->setAttribute('LabType', $request->input('LabType'));
        // $labourer->setAttribute('LabPhoneNo', $request->input('LabPhoneNo'));
        // $labourer->save();
      
         $m = DB::table('materials')
                    ->whereIn('id', [1,2])
                    ->get();

                    print_r($m);

      
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
