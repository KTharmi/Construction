@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Edit Material details</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open() ->route('admin.material.update' , ['material' => $material->id])->patch()->fill($material) !!}
                    {!! Form::text('MatName', 'Material Name') !!}
                    {!! Form::text('UnitPrice', 'UnitPrice') !!}
                    {!! Form::submit("Update") !!}
                    {!! Form::close() !!}
                </div>
    </section>
    
    </div>      
         
@endsection 