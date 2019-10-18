@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Update User</h3>
            </div> 
    </section>
                <!-- Main content -->
    <section class="content">
              
              <!-- /.box-header -->
   
            {!! Form::open()->route('admin.user.update', ['user' => $user->id])->patch()->fill($user) !!}
            {!! Form::text('username', 'UserName') ->required()!!}
            {!! Form::text('email', 'email')->required() !!}
            {!! Form::text('password', 'Password') ->required()!!}
            {!!Form::select('role','Select your Role', $roles ?? [])->required() !!}
            {!! Form::submit("Update") !!}
            {!! Form::close() !!}     
            </section>
</div>
@endsection 