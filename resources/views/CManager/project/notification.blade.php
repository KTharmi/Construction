@extends('CManager/app')
@section('main-contend')
@include('includes\messages')
            <!-- /.box-header -->
            <div>
            <h2> HAYANY Construction </h2>
            <p></p>

            <div>
      <h1 class="h5 mb-0 text-gray-600">PROJECT NOTE -NOTIFICATION</h1>
      <p>SUCCESSFULLY SENT</p>
      <a class="btn btn-primary btn-lg" href="{{route('CManager.project.projectNote')}}" role="button">BACK</a>
      </div>
              </div>
  @endsection 