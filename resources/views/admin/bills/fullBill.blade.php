@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Full bill Cost </h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages')
            <!-- /.box-header -->
            {!! Form::open()!!}
            {!! Form::select( 'project_name','Choose your project', $projects ?? [])  !!}
            <label for="inputTitle">Total Cost</label>
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
                  <th>Labour Cost</th>
                  <th>Material Name</th>
                  <th>Unit</th>
                  <th>$/unit</th>
                  <th>Material Cost</th>
                  <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($materials as $material)
                <tr>
                  <th>{{ $loop->index +1 }}</th>
                  <th></th>
                  <th></th>
                  <th>Days</th>
                  <th></th>
                  <th>Labour Cost</th>
                  <th>{{ $material->MatName }}</th>
                  <th>Unit</th>
                  <th>{{ $material->UnitPrice }}</th>
                  <th>Material Cost</th>
                  <th>Total</th>
                </tr>
                @endforeach
                </tbody>
               
              </table>
              {!!Form::reset("Clear form")!!}
              {!!Form::submit("save")!!}
              {!! Form::close() !!}
            </div>
            <button class="btn"><i class="fa fa-download"></i> Download</button>
            <!-- /.box-body -->
            </section>
          </div>
          
@endsection 