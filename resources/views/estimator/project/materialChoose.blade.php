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
                  <th>UnitPrice</th>
                  <th>Qty</th>
                </tr>
                </thead>
                <tbody>
                @foreach($material_assignments as $material_assignments)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $material_assignments->proId }}</td>
                  <td>#</td>
                  <td>#</td>
                  </tr>
                 @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection 