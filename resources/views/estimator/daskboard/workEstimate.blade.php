@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Task Estimated Details</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages') 
            <!-- /.box-header -->
            <a href="#" class="btn btn-success col-lg-offset ">BACK</a>
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Task</th>
                  <th>Units</th>
                  <th>Description</th>
                  <th> Rate</th>
                  <th>Amount</th>
                </tr>
                </thead>
                <tbody>
                @foreach($works as $work)  
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $work->task }}</td>
                  <td>{{ $work->rate }}</td>
                  <td>{{ $work->description }}</td>
                  <td><a href="{{route('admin.task.edit', $work->id)}}"><span class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></td>
                  <td><a href ="{{route('admin.task.delete', $work->id)}}"><span class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></span></a></td>
                  </tr>
                  @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection 