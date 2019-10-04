<?php

namespace App\Http\Controllers\Estimator;

use App\Work;
use App\Http\Requests\WorkStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();
        return view('estimator/task/index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estimator.task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\WorkStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkStoreRequest $request)
    {
         $work = new Work();
         $work->setAttribute('task', $request->input('task'));
         $work->setAttribute('description', $request->input('description'));
         $work->setAttribute('rate', $request->input('rate'));
         $work->save();

         return response()->redirectToRoute('estimator.task.view');
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
    public function edit(Work $work)
    {
        return view('estimator.task.update',compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkStoreRequest $request, Work $work)
    {
        $work->setAttribute('task', $request->input('task'));
        $work->setAttribute('description', $request->input('description'));
        $work->setAttribute('rate', $request->input('rate'));
        $work->save();

        return response()->redirectToRoute('estimator.task.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Work $work)
    {
        return view('estimator.task.delete', compact('work'));
    }
    public function destroy(WorkStoreRequest $request, Work $work)
    {
        $work->delete();
        return response()->redirectToRoute('estimator.task.view');
    }
}
