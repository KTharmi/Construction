@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Estimate Task -Unit select </h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages')
            <!-- /.box-header -->
            {!! Form::open()->route('estimator.drap.workStore')!!}
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Task</th>
                  <th>Description</th>
                  <th>Unit</th>
                  <th>Rate</th>
                </tr>
                </thead>
                <tbody>
                @foreach($works as $work)
                <tr>
                  <th>{{ $loop->index +1 }}</th>
                  <th>{{ $work->task }}</th>
                  <td>{{ $work->description }}</td>
                  <th><input type="number" name="{{ $work->id }}" value="Unit[]" ></th>
                  <th>{{ $work->rate}}</th>
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