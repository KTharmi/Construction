@extends('admin/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Update Employee</h3>
            </div> 
    </section>
                <!-- Main content -->
    <section class="content">
              
              <!-- /.box-header -->
                    {!! Form::open() ->route('admin.labourer.update' , ['labourer' => $labourer->id])->patch()->fill($labourer) !!}
                    {!! Form::text('LabName', 'Labourer Name') ->required()!!}
                    {!!Form::select('LabType', 'Choose your labouer type', [''=>'--choose your role---', 1=>'carbentant', 2=>'meson'])->required()!!}
                    {!! Form::tel('LabPhoneNo', 'Labourer PhoneNo')->placeholder('enter the labourer phoneNo')->required() !!}
                    {!! Form::submit("Update") !!}
                    {!! Form::close() !!}
                    </section>
</div>
@endsection 