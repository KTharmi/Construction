@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Create Employee</h3>
            <div class="card">
                <div class="card-body pad">
            {!! Form::open() ->route('admin.employee.store') !!}
            {!! Form::text('EmpName', 'Name')->placeholder('enter the employee name')->required() !!}
            {!! Form::text('EmpAddress', 'Address')->placeholder('enter the employee address')->required() !!}
            {!! Form::tel('EmpPhoneNo', 'Phone No')->placeholder('enter the employee phone no') ->required()!!}
            {!! Form::select( 'UserId','Choose your username', $users ?? [])->required() !!}
            {!! Form::submit("Save") !!}
            {!! Form::close() !!}
            </div>
    </section>
    
    </div>        
@endsection 