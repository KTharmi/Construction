<?php

namespace App\Http\Controllers\Estimator;

use App\Labourer;
use App\Http\Requests\LabourerStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LabourerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labourers = Labourer::all();
        return view('estimator/labourer/index', compact('labourers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estimator.labourer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\LabourerStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LabourerStoreRequest $request)
    {
        $labourer = new Labourer();
        $labourer->setAttribute('LabName', $request->input('LabName'));
        $labourer->setAttribute('LabType', $request->input('LabType'));
        $labourer->setAttribute('LabPhoneNo', $request->input('LabPhoneNo'));
        $labourer->save();

        return response()->redirectToRoute('estimator.labourer.view');
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
    public function edit(Labourer $labourer)
    {
        return view('estimator.labourer.update',compact('labourer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LabourerStoreRequest $request, Labourer $labourer)
    {
        $labourer->setAttribute('LabName', $request->input('LabName'));
        $labourer->setAttribute('LabType', $request->input('LabType'));
        $labourer->setAttribute('LabPhoneNo', $request->input('LabPhoneNo'));
        $labourer->save();

        return response()->redirectToRoute('estimator.labourer.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Labourer $labourer)
    {
        return view('estimator.labourer.delete', compact('labourer'));
    }
    public function destroy(LabourerStoreRequest $request, Labourer $labourer)
    {
        $labourer->delete();
        return response()->redirectToRoute('estimator.labourer.view');
    }
}
