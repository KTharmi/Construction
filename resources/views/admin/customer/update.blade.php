@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Update Customer</h3>
            </div> 
    </section>

    <!-- Main content -->
    <section class="content">
              
            <!-- /.box-header -->
   
            {!! Form::open()->route('admin.customer.update' , ['customer' => $customer->id])->patch()->fill($customer) !!}
            {!! Form::text('CustName', 'Name')->placeholder('enter the customer name') !!}
            {!! Form::text('CustAdress', 'Address')->placeholder('enter the customer address') !!}
            {!! Form::text('CustPhoneNo', 'Phone No')->placeholder('enter the customer phone no') !!}
            {!! Form::submit("Update") !!}
            {!! Form::close() !!}     
    </section>
</div>
@endsection 