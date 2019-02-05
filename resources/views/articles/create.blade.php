@extends('layouts.app')

@section('content')

@if(auth()->id()=='1')

<hr>




<form method="Post" action="/articles">
    
   {{csrf_field()}}
    <div class="container">
       <h1>Publish A Post</h1>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    
 
 
    <div class="form-group">
		 <label for="body">Body</label>
		 <textarea  id="body" name="body" class="form-control">
	
    </textarea>
  

 <hr>
  
  <button type="submit" class="btn btn-primary">Publish</button>

  </div>
  </div>

  @endif

  @include('layouts.errors')

</form>

  
@endsection