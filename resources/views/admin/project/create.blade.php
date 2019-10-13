@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Create Project</h3>
            <div class="card">
                <div class="card-body pad">
            {!! Form::open() ->route('admin.project.store') !!}
            {!! Form::text('ProName', 'Name')->placeholder('enter the project name') !!}
            {!! Form::text('ProAddress', 'Address')->placeholder('enter the project location') !!}
            {!! Form::text('description', 'Description')->placeholder('enter the project details') !!}
            {!! Form::submit("Save") !!}
            {!! Form::close() !!}
            </div>
    </section>
    
    </div>        
@endsection 