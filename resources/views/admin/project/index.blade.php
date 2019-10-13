@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Project Details</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages') 
            <!-- /.box-header -->
            <a href="{{route('admin.project.create')}}" class="btn btn-success col-lg-offset ">ADD</a>
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Project Name</th>
                  <th>Project Location</th>
                  <th>Project Description</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)  
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $project->ProName }}</td>
                  <td>{{ $project->ProAddress }}</td>
                  <td>{{ $project->description }}</td>
                  <td><a href="{{route('admin.project.edit', $project->ProId)}}"><span class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></td>
                  <td><a href ="{{route('admin.project.delete', $project->ProId)}}"><span class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></span></a></td>
                  </tr>
                  @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection 