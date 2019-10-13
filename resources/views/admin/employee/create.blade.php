@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Create Employee</h3>
            <div class="card">
                <div class="card-body pad">
            {!! Form::open() ->route('admin.employee.store') !!}
            {!! Form::text('EmpName', 'Name')->placeholder('enter the employee name') !!}
            {!! Form::text('EmpId', 'Id')->placeholder('enter the employee id') !!}
            {!! Form::text('EmpAddress', 'Address')->placeholder('enter the employee address') !!}
            {!! Form::text('EmpPhoneNo', 'Phone No')->placeholder('enter the employee phone no') !!}
            {!! Form::text('UserId', 'Roll')->placeholder('enter the user id') !!}
            {!! Form::submit("Save") !!}
            {!! Form::close() !!}
            </div>
    </section>
    
    </div>        
@endsection 