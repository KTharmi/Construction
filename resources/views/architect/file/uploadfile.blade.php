<div class="container">


					        

    <h2>Upload file</h2>
 
  

  {!! Form::open(array('url'=>'insertfile','method'=>'POST' ,'class'=>'form-horizontal','files'=>true)) !!}

  <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">


      <label class="control-label col-sm-2" for="name">Title:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control file_title_c" id="file_title_id" name="file_title" placeholder="Enter Tile"  value="#">

        @if ($errors->has('file_title')) <p class="help-block">{{ $errors->first('file_title') }}</p> @endif

				</div>


      </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Upload:</label>
  
      <div class="col-sm-4">          
      
        <input type="file"  name="filenam" class="filename">

        @if ($errors->has('filenam')) <p class="help-block">{{ $errors->first('filenam') }}</p> @endif

      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>



    </div>

    
{!! Form::close() !!}

</div>
 


<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>