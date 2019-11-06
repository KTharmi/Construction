@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Edit Equipment</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open() ->route('estimator.equipment.update' , ['equipment' => $equipment->id])->patch()->fill($equipment) !!}
                    {!! Form::text('EquipName', 'Equipment Name') !!}
                    {!! Form::submit("Update") !!}
                    {!! Form::close() !!}
                </div>
    </section>
    
    </div>      
         
@endsection 