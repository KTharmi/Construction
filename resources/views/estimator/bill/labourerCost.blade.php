@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title"> Labourer Cost </h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages')
            <!-- /.box-header -->
            <label for="inputTitle">Project Title</label>
            <input type="text" class="form-control"  placeholder="Title">
            <label for="inputTitle">Project Location</label>
            <input type="text" class="form-control"  placeholder="location">
            <label for="inputMgr">Project MGR</label>
            <input type="text" class="form-control"  placeholder="position">
            <label for="inputDate">Project start date</label>
            <input type="date" class="form-control"  placeholder="start date">
            <label for="inputDate">Project end date</label>
            <input type="date" class="form-control"  placeholder="end date">
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
                  <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($labourers as $labourer)
                <tr>
                  <th>{{ $loop->index +1 }}</th>
                  <th>{{ $labourer->LabName }}</th>
                  <th><input type="text" value="{{ $labour_assignments->WorkingHours ?? ''}}" name="days[]"></th>
                  <th><input type="text" value="{{ $labour_assignments->unitprice ?? ''}}" name="unitprice[]"></th>
                  <th><input type="text" value="{{ $labour_assignments->Salary ?? ''}}" name="Salary[]"></th>
                </tr>
                @endforeach
                </tbody>
               
              </table>
            </div>
            {!!Form::submit("Send form")!!}
            <!-- /.box-body -->
            </section>
          </div>
          
@endsection 