@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title"> Labourer & Material Cost </h3>
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
                  <th>CATEGORY & ITEMS</th>
                  <th>PROJECTED SUBTOTAL</th>
                  <th>ACTUAL SUBTOTAL</th>
                  <th>VARIANCE</th>
                  <th>PARTY RESPONSIBLE</th>
                  <th>STATUS</th>
                  <th>PCT OF TASK COMPLETE</th>
                  <th>CURRENT PAID</th>
                  <th>AMOUNT DUE</th>
                  <th>COMMENTS</th>
                </tr>
                </thead>
                <tbody>
               
                </tbody>
               <tfoot>
                  <th></th>
                  <th></th>
                  <th>PROJECTED SUBTOTAL</th>
                  <th>ACTUAL SUBTOTAL</th>
                  <th>VARIANCE</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>CURRENT PAID</th>
                  <th>AMOUNT DUE</th>
                  <th></th>
               </tfoot>
              </table>
            </div>
            {!!Form::submit("Send form")!!}
            <!-- /.box-body -->
            </section>
          </div>
          
@endsection 