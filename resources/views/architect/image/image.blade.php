@extends('architect/app')
@section('main-contend')
    @include('includes\messages')
            <!-- /.box-header -->
            <div>
            <h2> HAYANY Construction </h2>
            <p>Project Sketch image upload</p>

            
            {!! Form::open()->route('architect.image.store')!!}
            {!! Form::select( 'project_name','Choose your project', $projects ?? [])  !!}
            {!! Form::file('images[]', 'Images')->attrs(['multiple' => true]) !!}
            {!!Form::reset("Clear form")!!}
            {!!Form::submit("save")!!}
            {!! Form::close() !!}
            </div>
 @endsection 