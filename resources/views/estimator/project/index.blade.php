@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Projects Details</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages')
            <!-- /.box-header -->
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Project Name</th>
                  <th>Project Address</th>
                  <th>View</th>
                  <th>Choosed Material</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)  
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $project->ProName }}</td>
                  <td>{{ $project->ProAddress }}</td>
                  <td><a href="{{route('estimator.project.show', $project->id)}}"><span class="btn btn-primary btn-circle btn-sm"><i class="fa fa-database" aria-hidden="true"></i></span></a></td>
                  <td><a href ="{{route('estimator.project.materialChoose', $project->id)}}"><span class="btn btn-danger btn-circle btn-sm"><i class="fa fa-th-list" aria-hidden="true"></i></span></a></td>
                  </tr>
                  @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
@endsection