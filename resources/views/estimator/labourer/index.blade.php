@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Labourers Details</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages')
            <!-- /.box-header -->
            <a href="{{route('estimator.labourer.create')}}" class="btn btn-success col-lg-offset ">ADD</a>
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Labourer Name</th>
                  <th>Labourer Type</th>
                  <th>Labourer phoneNo</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($labourers as $labourer)  
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $labourer->LabName }}</td>
                  <td>{{ $labourer->LabType }}</td>
                  <td>{{ $labourer->LabPhoneNo }}</td>
                  <td><a href="{{route('estimator.labourer.edit', $labourer->id)}}"><span class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></td>
                  <td><a href ="{{route('estimator.labourer.delete', $labourer->id)}}"><span class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></span></a></td>
                  </tr>
                  @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection 