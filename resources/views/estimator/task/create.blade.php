@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Create Task</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open() ->route('estimator.task.store') !!}
                    {!! Form::text('task', 'Task Name')->placeholder('enter the task name') !!}
                    {!! Form::text('description', 'Task Description')->placeholder('enter the task description') !!}
                    {!! Form::text('rate', 'Rate')->placeholder('enter the rate') !!}
                    {!! Form::submit("Save") !!}
                    {!! Form::close() !!}
                </div>
    </section>
    
    </div>      
         
@endsection 