@extends('layouts/app')

@section('content')
@include('includes\messages')
            <!-- /.box-header -->
            <div>
            <h2> HAYANY Construction </h2>
            <p>Customer Materials Requisition Form</p>
            {!! Form::open()->route('estimator.drap.materialStore')!!}
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Select</th>
                  <th>Material Name</th>
                  <th>Unit Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($materials as $material)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td> <input type="checkbox" name="yes[]" value="{{ $material->id }}"> SELECT<br></td>
                  <td>{{ $material->MatName }}</td>
                  <td>{{ $material->UnitPrice }}</td>
                  </tr>
                 @endforeach
                </tbody>
               
              </table>
              {!!Form::reset("Clear form")!!}
              {!!Form::submit("save")!!}
              {!! Form::close() !!}
            @endsection 
  