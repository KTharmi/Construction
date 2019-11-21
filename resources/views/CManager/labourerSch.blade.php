@extends('CManager/app')
@section('main-contend')
@include('includes\messages')
            <!-- /.box-header -->
            <div>
            <h2> HAYANY Construction </h2>
            <p>Labourer Schedule</p>
            {!! Form::open()->route('CManager.labourerSch.store')!!}
            {!! Form::select( 'project_name','Choose your project', $projects ?? [])  !!}
            {!! Form::date( 'date','Current Date')  !!}
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Select</th>
                  <th>Labourer Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($labourers as $labourer)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td> <input type="checkbox" name="yes[]" value="{{$labourer->id}}"> SELECT<br></td>
                  <td>{{ $labourer->LabName }}</td>
                 </tr>
                  
                 @endforeach
                </tbody>
               
              </table>
              {!!Form::reset("Clear form")!!}
              {!!Form::submit("save")!!}
              {!! Form::close() !!}
            @endsection 
  