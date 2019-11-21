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
            {!! Form::open()->route('estimator.estimate.taskStore')!!}
            {!! Form::select( 'project_name','Choose your project', $projects ?? [])  !!}
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Task</th>
                  <th>Task Description</th>
                  <th>Days</th>
                  <th>$/days</th>
                </tr>
                </thead>
                <tbody>
                @foreach($works as $work)  
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $work->task }}</td>
                  <td>{{ $work->description }}</td>
                  <td><input type="number" name="{{ $work->id }}" value="Unit[]" ></td>
                  <td>{{ $work->rate }}</td>
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