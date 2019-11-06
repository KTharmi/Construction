@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Equipment Details</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages')
            <!-- /.box-header -->
            <a href="{{route('estimator.equipment.create')}}" class="btn btn-success col-lg-offset ">ADD</a>
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Equipment Name</th>
                  <th>Rent</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($equipments as $equipment)  
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $equipment->EquipName }}</td>
                  <td>{{ $equipment->rent }}</td>
                  <td><a href="{{route('estimator.equipment.edit', $equipment->id)}}"><span class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></td>
                  <td><a href ="{{route('estimator.equipment.delete', $equipment->id)}}"><span class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></span></a></td>
                  </tr>
                  @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection 