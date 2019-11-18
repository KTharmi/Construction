@extends('layouts/app')

@section('content')
@include('includes\messages')
            <!-- /.box-header -->
            <div>
            <h2> HAYANY Construction </h2>
            <p>Project Daily note</p>
            {!! Form::open()->route('estimator.estimate.selectionStore')!!}
            {!! Form::select( 'project_name','Choose your project', $projects ?? [])  !!}
            {!!Form::date('date', 'Current Date')!!}
            {!! Form::textarea( 'project_details','Description')  !!}
            {!!Form::submit("save")!!}
            {!! Form::close() !!}
 @endsection 
  