@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Create Material</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open() ->route('admin.material.store') !!}
                    {!! Form::text('MatName', 'Material Name')->placeholder('enter the material name') !!}
                    {!! Form::text('MatType', 'Material Type')->placeholder('enter the material type') !!}
                    {!! Form::text('UnitPrice', 'UnitPrice')->placeholder('enter the material unitprice') !!}
                    {!! Form::submit("Save") !!}
                    {!! Form::close() !!}
                </div>
    </section>
    
    </div>      
         
@endsection 