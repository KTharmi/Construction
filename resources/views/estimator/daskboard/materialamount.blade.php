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
            {!! Form::open()->route('estimator.drap.unitStore')!!}
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Material Name</th>
                  <th>$/unit</th>
                  <th>units</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dmaterials as $dmaterials)
                <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>@foreach($dmaterials->materials as $met)
                        {{$met->MatName}}
                        
                    @endforeach
                  </td>
                  <td>@foreach($dmaterials->materials as $met)
                        {{$met->UnitPrice}}
                        
                    @endforeach
                  </td>
                  <td>
                  <input type="hidden" name="mat[matid][]" value ="{{ $dmaterials->MatId }}" >
                  <input type="number" name="mat[unit][]"  ></td>
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