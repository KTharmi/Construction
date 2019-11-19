@extends('architech/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Project Sketch Details</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages') 
            <!-- /.box-header -->
            <a href="#" class="btn btn-success col-lg-offset ">ADD</a>
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Project Name</th>
                  <th>Images</th>
                  <th>Edit</th>
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