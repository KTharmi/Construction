<?php

namespace App\Http\Controllers\Estimator;

use App\Material;
use App\Http\Requests\MaterialStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::all();
        return view('estimator/material/index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estimator.material.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\MaterialStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaterialStoreRequest $request)
    {
         $material = new Material();
         $material->setAttribute('MatName', $request->input('MatName'));
         $material->setAttribute('MatType', $request->input('MatType'));
         $material->save();

         return response()->redirectToRoute('estimator.material.view');
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
    public function edit(Material $material)
    {
        return view('estimator.material.update',compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Material $material ,Request $request)
    {
         $material->setAttribute('MatName', $request->input('MatName'));
         $material->setAttribute('MatType', $request->input('MatType'));
         $material->save();

         return response()->redirectToRoute('estimator.material.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Material $material)
    {
        return view('estimator.material.delete', compact('material'));
    }
    public function destroy(Material $material ,Request $request)
    {
        $material->delete();
        return response()->redirectToRoute('estimator.material.view');
    }
}
