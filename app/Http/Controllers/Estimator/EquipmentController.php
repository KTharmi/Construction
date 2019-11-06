<?php

namespace App\Http\Controllers\Estimator;

use App\Equipment;
use App\Http\Requests\EquipmentStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipments = Equipment::all();
        return view('estimator/equipment/index', compact('equipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estimator.equipment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\EquipmentStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipmentStoreRequest $request)
    {
        $equipment = new Equipment();
        $equipment->setAttribute('EquipName', $request->input('EquipName'));
        $equipment->save();

        return response()->redirectToRoute('estimator.equipment.view');
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
    public function edit(Equipment $equipment)
    {
        return view('estimator.equipment.update',compact('equipment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Equipment $equipment, Request $request )
    {
        $equipment->setAttribute('EquipName', $request->input('EquipName'));
        $equipment->save();

        return response()->redirectToRoute('estimator.equipment.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Equipment $equipment)
    {
        return view('estimator.equipment.delete', compact('equipment'));
    }
    public function destroy(Equipment $equipment, Request $request)
    {
        $equipment->delete();
        return response()->redirectToRoute('estimator.equipment.view');
    }
}
