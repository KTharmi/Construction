@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Delete A Task</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Delete Task</h3>
            <div class="card">
                <div class="card-body pad">
                <div class="panel-heading">Are you sure?</div>
                        <div class="panel-body">{{ $work->task }}</div>
                        {!!Form::open()->method('delete')->route('admin.task.destroy', ['work' => $work->id])!!}
                        {!!Form::hidden('id')->value($work->id)!!}
                        {!!Form::submit('Delete')->danger()!!}
                        {!!Form::anchor("Cancel")->route('admin.task.view')!!}
                        {!!Form::close()!!}
                        </div>
            </div>
        </div>
    </div>
    </section>
    </div>
    @endsection