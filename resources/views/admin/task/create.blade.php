@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Create Task</h3>
            <div class="card">
                <div class="card-body pad">
            {!! Form::open() ->route('admin.task.store') !!}
            {!! Form::text('task', 'Task')->placeholder('enter the task') !!}
            {!! Form::text('rate', 'Rate')->placeholder('enter the rate') !!}
            {!! Form::textarea('description', 'Description')->placeholder('enter the task details') !!}
            {!! Form::submit("Save") !!}
            {!! Form::close() !!}
            </div>
    </section>
    
    </div>        
@endsection 