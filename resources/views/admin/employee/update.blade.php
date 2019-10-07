@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Update Employee</h3>
            </div> 
    </section>

    <!-- Main content -->
    <section class="content">
              
            <!-- /.box-header -->
   
            {!! Form::open()->route('admin.employee.update' , ['employee' => $employee->id])->patch()->fill($employee) !!}
            {!! Form::text('EmpName', 'Name')->placeholder('enter the employee name') !!}
            {!! Form::text('EmpId', 'Id')->placeholder('enter the employee id') !!}
            {!! Form::text('EmpAddress', 'Address')->placeholder('enter the employee address') !!}
            {!! Form::text('EmpPhoneNo', 'Phone No')->placeholder('enter the employee phone no') !!}
            {!! Form::text('UserId', 'Roll')->placeholder('enter the user id') !!}
            {!! Form::close() !!}
    <a href="3" class="btn btn-success col-lg-offset ">SUBMIT</a>     
@endsection 