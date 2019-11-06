@extends('estimator/app')
@section('main-contend')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box-header">
              <h3 class="box-title">Delete A Labourer</h3>
            </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3>Delete Labourer</h3>
            <div class="card">
                <div class="card-body pad">
                <div class="panel-heading">Are you sure?</div>
                        <div class="panel-body">{{ $labourer->LabName }}</div>
                        {!!Form::open()->method('delete')->route('estimator.labourer.destroy', ['labourer' => $labourer->id])!!}
                        {!!Form::hidden('id')->value($labourer->id)!!}
                        {!!Form::submit('Delete')->danger()!!}
                        {!!Form::anchor("Cancel")->route('estimator.labourer.view')!!}
                        {!!Form::close()!!}
                        </div>
            </div>
        </div>
    </div>
    </section>
    </div>
    @endsection