@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Material Details</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages')
            <!-- /.box-header -->
            
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Material Name</th>
                  <th>Material Type</th>
                  <th>UnitPrice</th>
                  <th>Selection</th>
                </tr>
                </thead>
                <tbody>
                @foreach($materials as $material)  
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $material->MatName }}</td>
                  <td>{{ $material->MatType }}</td>
                  <td>{{ $material->UnitPrice }}</td>
                  <td><a href="{{route('estimator.materialChoose.edit', $material->id)}}"><span class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></td>
                  </tr>
                  @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection 