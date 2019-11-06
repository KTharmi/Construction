@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Delete A Material</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Delete Material</h3>
            <div class="card">
                <div class="card-body pad">
                <div class="panel-heading">Are you sure?</div>
                        <div class="panel-body">{{ $material->MatName }}</div>
                        {!!Form::open()->method('delete')->route('estimator.material.destroy', ['material' => $material->id])!!}
                        {!!Form::hidden('id')->value($material->id)!!}
                        {!!Form::submit('Delete')->danger()!!}
                        {!!Form::anchor("Cancel")->route('estimator.material.view')!!}
                        {!!Form::close()!!}
                        </div>
            </div>
        </div>
    </div>
    </section>
    </div>
    @endsection