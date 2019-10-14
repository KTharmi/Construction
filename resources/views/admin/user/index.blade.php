@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">User Details</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages') 
            <!-- /.box-header -->
            <a href="{{route('admin.user.create')}}" class="btn btn-success col-lg-offset ">ADD</a>
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user->email }}</td>
                  <td><a href="{{ route('admin.user.edit', $user->id) }}"><span class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></a></td>
                  <td><a href ="{{route('admin.user.delete', $user->id) }}"><span class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></span></a></td>
                  </tr>
                    @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection 