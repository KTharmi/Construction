@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Delete A Employee</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Delete User</h3>
            <div class="card">
                <div class="card-body pad">
                <div class="panel-heading">Are you sure?</div>
                <div class="panel-body">{{ $user->name }}</div>
                        {!!Form::open()->method('delete')->route('admin.user.destroy', ['users' => $user->id])!!}
                        {!!Form::hidden('id')->value($user->id)!!}
                        {!!Form::submit('Delete')->danger()!!}
                        {!!Form::anchor("Cancel")->route('admin.user.index')!!}
                        {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>