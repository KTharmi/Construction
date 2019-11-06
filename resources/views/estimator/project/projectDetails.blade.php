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
    <div class="row">
        <div class="col-md-12">
            <h3>{{ $project->ProName }}</h3>
        </div>
    </div>
    <div class="card pad">
        <div class="row">
            <div class="col-md-3">
                <b>Name :</b>
            </div>
            <div class="col-md-3">
                {{ $project->ProName }}
            </div>

        </div>
        <div class="row">
            <div class="col-md-3">
                <b>Description:</b>
            </div>
            <div class="col-md-6">
                {{ $project->description }}
            </div>
        </div>
    </div>
    <div>
    </section>
    </div> 
@endsection