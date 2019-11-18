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
                  <th>{{ $loop->index +1 }}</th>
                  <th>{{ $work->task }}</th>
                  <th>{{ $work->description }}</th>
                  <th>Days</th>
                  <th>{{ $work->rate }}</th>
                  <th>Total</th>
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