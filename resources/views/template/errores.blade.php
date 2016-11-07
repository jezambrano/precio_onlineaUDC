@if(Session::has('flash_message'))
    <div class="alert bg-danger">
       <h4> {{ Session::get('flash_message') }}</h4>
    </div>
@endif

@if($errors->any())

    	<div class="alert alert-warning alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  			<strong>Aviso!</strong> por favor revise los siguientes idem:
		</div>
    <div class="alert alert-danger" role="alert">
	   <ul>
            @foreach($errors->all() as $error)
    	   
    		
    			   <li>{{$error}}</li>

    
            @endforeach
        </ul>
    </div>
@endif

