@extends('user/app')
@section('main-contend')
 <div class="row">
    <div class="col-md-12">
        <br />
        <h3 align="center"> Project Details</h3>
        <br />
        <table class="table table-bordered">
        <tr>
            <th>Name of the Project</th>
            <th>Project Location</th>
            <th>Project Description</th>
            
            
        </tr>
        @foreach($projects as $row)
        <tr>
            <td>{{$row['ProName']}}</td>
            <td>{{$row['ProAddress']}}</td>
            <td>{{$row['description']}}</td>
            
            
        </tr>
        @endforeach
    </div>
 </div>


@endsection 