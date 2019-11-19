@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Estimate Material Cost </h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages')
            <!-- /.box-header -->
            {!! Form::open()!!}
            {!! Form::select( 'project_name','Choose your project', $projects ?? [])  !!}
            
            <label for="inputTitle">Total Estimation Material Cost</label>
            <input type="text" class="form-control"  placeholder="Cost">
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Material Name</th>
                  <th>Material Type</th>
                  <th>Unit</th>
                  <th>$/unit</th>
                  <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($materials as $material)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td> <input type="checkbox" name="yes[]" value="{{ $material->id }}"> SELECT<br></td>
                  <td>{{ $material->MatName }}</td>
                  <td>{{ $material->MatType }}</td>
                  <th><input type="text" value="{{ $material->unitprice ?? ''}}" name="unitprice[]"></th>
                  <td>{{ $material->UnitPrice }}</td>
                  <th><input type="text" value="{{ $material->Salary ?? ''}}" name="Salary[]"></th>
                  </tr>
                 @endforeach
                </tbody>
               
              </table>
              {!!Form::reset("Clear form")!!}
              {!!Form::submit("save")!!}
              {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
            <button class="btn"><i class="fa fa-download"></i> Download</button>
            </section>
          </div>
         
@endsection 