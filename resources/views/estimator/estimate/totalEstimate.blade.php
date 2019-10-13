@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Estimate Labourer & Material Cost </h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages')
            <!-- /.box-header -->
            <label for="inputTitle">Project Title</label>
            <input type="text" class="form-control"  placeholder="Title">
            <label for="inputTitle">Total Cost</label>
            <input type="text" class="form-control"  placeholder="Cost">
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Task</th>
                  <th>Task Description</th>
                  <th>Days</th>
                  <th>$/days</th>
                  <th>Labour Cost</th>
                  <th>Material Name</th>
                  <th>Material Type</th>
                  <th>Unit</th>
                  <th>$/unit</th>
                  <th>Material Cost</th>
                  <th>Total</th>
                </tr>
                </thead>
                <tbody>
               
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection 