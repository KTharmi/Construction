@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Update Task</h3>
    </div> 
    </section>

    <!-- Main content -->
    <section class="content">
              
            <!-- /.box-header -->
   
            {!! Form::open()->route('admin.task.update' , ['work' => $work->id])->patch()->fill($work) !!}
            {!! Form::text('task', 'Task')->placeholder('enter the task') !!}
            {!! Form::text('rate', 'Rate')->placeholder('enter the rate') !!}
            {!! Form::textarea('description', 'Description')->placeholder('enter the task details') !!}
            {!! Form::submit("Update") !!}
            {!! Form::close() !!}   
    </section>
    </div>
@endsection 