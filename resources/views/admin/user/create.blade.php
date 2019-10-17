@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
            <h3>Create User</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open()->route('admin.user.store') !!}
                    {!! Form::text('username', 'UserName')->placeholder('enter the user name')->required() !!}
                    {!! Form::text('email', 'Email')->placeholder('enter the email ')->required() !!}
                    {!! Form::text('password', 'Password')->placeholder('enter the password ')->required() !!}
                    {!!Form::select('role', 'Choose your role', [''=>'--choose your role---', 1=>'Admin', 2=>'Engineer',3=>'Construction_Manager',4=>'Estimator',5=>'Architect'])!!}
                    {!! Form::submit("Add") !!}
                    {!! Form::close() !!}
            </div>
    </section>
    
    </div>        
@endsection 