@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Edit Material details</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open() ->route('estimator.labourer.update' , ['labourer' => $labourer->id])->patch()->fill($labourer) !!}
                    {!! Form::text('LabName', 'Labourer Name') !!}
                    {!! Form::text('LabType', 'Labourer Type') !!}
                    {!! Form::text('LabPhoneNo', 'Labourer PhoneNo') !!}
                    {!! Form::submit("Update") !!}
                    {!! Form::close() !!}
                </div>
    </section>
    
    </div>      
         
@endsection 