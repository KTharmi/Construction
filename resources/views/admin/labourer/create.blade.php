@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Create Labourer</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open() ->route('admin.labourer.store') !!}
                    {!! Form::text('LabName', 'Labourer Name')->placeholder('enter the labourer name')->required() !!}
                    {!!Form::select('LabType', 'Choose your labouer type', [''=>'--choose your role---', 1=>'carbentant', 2=>'meson'])!!}
                    {!! Form::tel('LabPhoneNo', 'Labourer PhoneNo')->placeholder('enter the labourer phoneNo') ->required()!!}
                    {!! Form::submit("Save") !!}
                    {!! Form::close() !!}
                </div>
    </section>
    
    </div>      
         
@endsection 