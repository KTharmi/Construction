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
            {!! Form::open()->route('estimator.estimate.unitStore')!!}
            {!! Form::select( 'project_name','Choose your project', $projects ?? [])  !!}
            
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Material Name</th>
                  <th>Unit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($material_assignment as $material_assignment)  
                  <tr>
                  @foreach($material_assignment->materials as $met)
                  <td>{{ $loop->index +1 }}</td>
                  <td>
                        {{$met->MatName}}
                        
                    
                  </td>
                  <td>
                  <input type="hidden" name="matid[]" value ="{{ $material_assignment->MatId }}" >
                  <input type="number" name="unit[]"  ></td>
                  @endforeach
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