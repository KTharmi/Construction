@extends('CManager/app')
@section('main-contend')
@include('includes\messages')
            <!-- /.box-header -->
            <div>
            <h2> HAYANY Construction </h2>
            <p>Labourer Schedule -view</p>
            <div class="box-body card">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Labourer Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($labourer_schedule as $labourer_schedule)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>@foreach($labourer_schedule->labourers as $lab)
                        {{$lab->LabName}}
                        
                    @endforeach
                  </td>
                 </tr>
                  
                 @endforeach
                </tbody>
              </table>
            @endsection 
  