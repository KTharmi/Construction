@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Customer Details</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    @include('includes\messages') 
            <!-- /.box-header -->
            <a href="{{route('admin.customer.create')}}" class="btn btn-success col-lg-offset ">ADD</a>
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Customer Name</th>
                  <th>Customer Address</th>
                  <th>Customer phoneNo</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)  
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $customer->CustName }}</td>
                  <td>{{ $customer->CustAdress }}</td>
                  <td>{{ $customer->CustPhoneNo }}</td>
                  <td><a href="{{route('admin.customer.edit', $customer->id)}}"><span class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></td>
                  </tr>
                  @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
            </section>
          </div>
         
@endsection 