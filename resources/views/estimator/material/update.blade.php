@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Edit Material details</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open() ->route('estimator.material.update' , ['material' => $material->id])->patch()->fill($material) !!}
                    {!! Form::text('MatName', 'Material Name') !!}
                    {!! Form::text('MatType', 'Material Type') !!}
                    {!! Form::submit("Update") !!}
                    {!! Form::close() !!}
                </div>
    </section>
    
    </div>      
         
@endsection 