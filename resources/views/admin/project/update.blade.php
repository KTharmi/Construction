@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Update Project</h3>
            </div> 
    </section>

    <!-- Main content -->
    <section class="content">
              
            <!-- /.box-header -->
   
            {!! Form::open()->route('admin.project.update' , ['project' => $project->id])->patch()->fill($project) !!}
            {!! Form::text('ProName', 'Name')->placeholder('enter the project name') !!}
            {!! Form::text('ProAddress', 'Address')->placeholder('enter the project location') !!}
            {!! Form::text('description', 'Description')->placeholder('enter the project details') !!}
            {!! Form::close() !!}
    <a href="3" class="btn btn-success col-lg-offset ">SUBMIT</a>     
@endsection 