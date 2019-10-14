@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Update user</h3>
            </div> 
    </section>

    <!-- Main content -->
    <section class="content">
              
            <!-- /.box-header -->
   
            {!! Form::open()->route('admin.user.update', ['user' => $user->id])->patch()->fill($user) !!}
            {!! Form::text('username', 'UserName') !!}
            {!! Form::text('email', 'email') !!}
            {!! Form::text('password', 'Password') !!}
            {!!Form::select('role', 'Choose your role', [''=>'--choose your role---', 1=>'Admin', 2=>'Engineer',3=>'Construction_Manager',4=>'Estimator',5=>'Architect'])!!}
            {!! Form::submit("Update") !!}
            {!! Form::close() !!}     
    </section>
</div>
@endsection 