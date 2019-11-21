@extends('CManager/app')
@section('main-contend')
@include('includes\messages')
            <!-- /.box-header -->
            <div>
            <h2> HAYANY Construction </h2>
            <p>PROJECT NOTE</p>
            {!! Form::open()->route('CManager.project.Store')!!}
            {!! Form::select( 'project_name','Choose your project', $projects ?? [])  !!}
            {!! Form::date( 'date','Current Date')  !!}
            {!! Form::textarea( 'note','Daily Note')  !!}
              {!!Form::reset("Clear form")!!}
              {!!Form::submit("save")!!}
              {!! Form::close() !!}

              </div>
            @endsection 
  