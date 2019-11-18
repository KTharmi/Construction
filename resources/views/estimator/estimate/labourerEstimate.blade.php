@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Estimate Labourer Cost </h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages')
            <!-- /.box-header -->
            {!! Form::open()->route('estimator.estimate.labourer')!!}
            {!! Form::select( 'project_name','Choose your project', $projects ?? [])  !!}
            <label for="inputTitle">Total Material Cost</label>
            <input type="text" class="form-control"  placeholder="Cost">
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                @foreach($labourers as $labourer)
                <tr>
                  <th>S.NO</th>
                  <th>Labourer Name</th>
                  <th>Days</th>
                  <th>$/days</th>
                  <th>Total</th>
                </tr>
                @endforeach
                </thead>
                <tbody>
                @foreach($labourers as $labourer)
                <tr>
                  <th>{{ $loop->index +1 }}</th>
                  <th>{{ $labourer->LabName }}</th>
                  <th>Days</th>
                  <th></th>
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