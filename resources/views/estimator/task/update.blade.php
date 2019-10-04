@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Edit Task details</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open() ->route('estimator.task.update' , ['work' => $work->id])->patch()->fill($work) !!}
                    {!! Form::text('task', 'Task Name') !!}
                    {!! Form::text('description', 'Task Description') !!}
                    {!! Form::text('rate', 'Rate') !!}
                    {!! Form::submit("Update") !!}
                    {!! Form::close() !!}
                </div>
    </section>
    
    </div>      
         
@endsection 