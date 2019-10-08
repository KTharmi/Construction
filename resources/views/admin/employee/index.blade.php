@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Employee Details</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages') 
            <!-- /.box-header -->
            <a href="{{route('admin.employee.create')}}" class="btn btn-success col-lg-offset ">ADD</a>
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Employee Name</th>
                  <th>Employee Address</th>
                  <th>Employee phoneNo</th>
                  <th>UserId </th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)  
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $employee->EmpName }}</td>
                  <td>{{ $employee->EmpAddress }}</td>
                  <td>{{ $employee->EmpPhoneNo }}</td>
                  <td>{{ $employee->UserId }}</td>
                  <td><a href="{{route('admin.employee.edit', $employee->EmpId)}}"><span class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></td>
                  <td><a href ="{{route('admin.employee.delete', $employee->EmpId)}}"><span class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></span></a></td>
                  </tr>
                  @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection 