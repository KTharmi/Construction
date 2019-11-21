<?php

namespace App\Http\Controllers\Estimator;

use App\Material;
use App\Project;
use App\Work;
use App\Dmaterial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DrapEstimateController extends Controller
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
        return view('estimator/daskboard/materialSelection', compact('materials','projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Dmaterial::pluck('MatId')->toArray();
        $dmaterials = Dmaterial::where('MatId',$id)->select('MatId')->with('materials')->get();
        return view('estimator/daskboard/materialamount', compact('dmaterials'));
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
         $dmaterials = new Dmaterial();
         $num=(int)$type[$i];
         $dmaterials->setAttribute('MatId', $num);
         $dmaterials->save();
         }
        return response()->redirectToRoute('estimator.drap.create' );
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

    public function workSelection()
    {
        $works = Work::all();
        return view('estimator/daskboard/workSelection', compact('works'));
    }

    public function workStore(Request $request)
    {
        //$type =$request->input('id');
        dd($type);
        // for($i=0; $i< count(collect($type)); $i++)
        // {
        //  $dmaterials = new Dmaterial();
        //  $num=(int)$type[$i];
        //  $dmaterials->setAttribute('MatId', $num);
        //  $dmaterials->save();
        //  }
        //return response()->redirectToRoute('estimator.drap.create' );
    }

    public function unitStore(Request $request)
    {
       
        $type =$request->input('MatId');
        dd($type);
        $dmaterials->setAttribute('MatId', $num);
         $dmaterials->setAttribute('ProId', $request->input('project_name'));
         $dmaterials->setAttribute('Qty', $request->input('Unit'));
         

         $dmaterials->save();

    }
}
