@extends('estimator/app')
@section('main-contend')

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
            <div class="box-header">
              <h3 class="box-title"> Project Details </h3>
            </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-4">
            <h3>{{ $project->ProName }}</h3>
        </div>
            <div class="col-md-4">
                <b>Name :</b>
            </div>
            <div class="col-md-4">
                {{ $project->ProName }}
            </div>

            <div class="col-md-4">
                <b>Description:</b>
            </div>
            <div class="col-md-4">
                {{ $project->description }}
            </div>
            <div class="col-md-4">
                <b>Address :</b>
            </div>
            <div class="col-md-4">
                {{ $project->ProAddress }}
            </div>
            <div class="col-md-4">
                <b>Start Date :</b>
            </div>
            <div class="col-md-4">
                {{ $project->proStartDate }}
            </div>

       
    <div>
    </section>
    </div> 
@endsection