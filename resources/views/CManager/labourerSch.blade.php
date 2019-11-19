@extends('layouts/app')

@section('content')
@include('includes\messages')
            <!-- /.box-header -->
            <div>
            <h2> HAYANY Construction </h2>
            <p>Labourer Schedule</p>
            {!! Form::open()->->route('CManager.labourerSch.store')!!}
            {!! Form::select( 'project_name','Choose your project', $projects ?? [])  !!}
            {!! Form::date( 'date','Current Date')  !!}
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Select</th>
                  <th>Labourer Name</th>
                  <th>id</th>
                  
                </tr>
                </thead>
                <tbody>
                @foreach($labourers as $labourer)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td> <input type="checkbox" name="yes[]" value="YES"> SELECT<br></td>
                  <td>{{ $labourer->LabName }}</td>
                  <td>{{ $labourer->id }}<input type="hidden" name="id[]" value="{{ $labourer->id }}"></td>
                 
                  
                 @endforeach
                </tbody>
               
              </table>
              {!!Form::reset("Clear form")!!}
              {!!Form::submit("save")!!}
              {!! Form::close() !!}
            @endsection 
  