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
    public function create($id)
    {
          $material_assignment = Material_assignment::where('ProId',$id)->select('MatId')->with('materials')->distinct()->get();
        return view('estimator/estimate/materialEstimate', compact('material_assignment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ProjectMaterialStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function selectionStore(ProjectMaterialStoreRequest $request)
    {
        
        $proId =$request->input('project_name');
        $type =$request->input('yes');
        for($i=0; $i< count(collect($type)); $i++)
        {
         $material_assignment = new Material_assignment();
         $num=(int)$type[$i];
         $material_assignment->setAttribute('MatId', $num);
         $material_assignment->setAttribute('ProId', $request->input('project_name'));
         $material_assignment->save();
         }
        
          $projectid=Project::where('id', '=',  $proId )->first()->id;
         return  redirect()->route('estimator.estimate.show' , ['projectid' =>$projectid ]);
       // return response()->redirectToRoute('estimator.estimate.show' ,$projectid);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {


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
    public function unitStore(Request $request)
    {
    //  return $request;
    //  return  $type = $request->mat;
       $maC=0;
       $maU=0;
     foreach ($request->matid as $ma)
     {
        $maU = 0;
         foreach($request->unit as $unit){
            if($maC == $maU)
            {
                $material_assignment = Material_assignment::where('MatId','=',$ma)->update(['Qty' => $unit]);
            }
            $maU++;
         }
         $maC++;
     }
    return view('estimator.estimate.view');
        
    }
    public function view()
    {
       // $projects = Project::get()->pluck('ProName','id')->toArray();
        //$matId = Material_assignment::get()->pluck('MatId')->toArray();


        return view('estimator/estimate/materialEstimateCost');
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
