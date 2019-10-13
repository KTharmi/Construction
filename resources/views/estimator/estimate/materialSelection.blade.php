@extends('layouts/app')

@section('content')
@include('includes\messages')
            <!-- /.box-header -->
            <div>
            <h2> HAYANY Construction </h2>
            <p>Customer Materials Requisition Form</p>
            {!! Form::open() !!}
            {!! Form::select( 'project_name','Choose your project') !!}
            {!! Form::select( 'project_id','project id')->readonly() !!}
             
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Material Type</th>
                  <th>Material Name</th>
                  <th>Unit</th>
                  <th>Select</th>
                </tr>
                </thead>
                <tbody>
                
                  <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>{!!Form::checkbox('yes', 'YES')->inline()!!}
                  </tr>
                </tbody>
               
              </table>
              {!!Form::reset("Clear form")!!}
              {!!Form::submit("Send form")!!}
              {!! Form::close() !!}
            </div>
            <button class="btn"><i class="fa fa-download"></i> Download</button>
            @endsection 