@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Estimate Task Cost </h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages')
            <!-- /.box-header -->
            {!! Form::open()->route('estimator.estimate.task')!!}
            {!! Form::select( 'project_name','Choose your project', $projects ?? [])  !!}
            <label for="inputTitle">Total Task Cost</label>
            <input type="text" class="form-control"  placeholder="Cost">
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Task</th>
                  <th>Task Description</th>
                  <th>Days</th>
                  <th>$/days</th>
                  <th>Total</th>
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
              {!!Form::reset("Clear form")!!}
              {!!Form::submit("save")!!}
              {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection 