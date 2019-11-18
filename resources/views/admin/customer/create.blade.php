@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Create Customer</h3>
            <div class="card">
                <div class="card-body pad">
            {!! Form::open() ->route('admin.customer.store') !!}
            {!! Form::text('CustName', 'Name')->placeholder('enter the customer name')->required() !!}
            {!! Form::text('CustAdress', 'Address')->placeholder('enter the customer address')->required() !!}
            {!! Form::tel('CustPhoneNo', 'Phone No')->placeholder('enter the customer phone no') ->required()!!}
            {!! Form::submit("Save") !!}
            {!! Form::close() !!}
            </div>
    </section>
    
    </div>        
@endsection 