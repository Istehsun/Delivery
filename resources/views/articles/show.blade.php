@extends('layouts.app')



@section('content')

<div class="container">
  <h2 href="#">My Articles</h2>
</div>
  

<div class="container">
 <div class="blog-post">
            <h3 class="blog-post-title">{{$id->title}}</h2>
            <p class="blog-post-meta">{{$id->created_at->toFormattedDateString()}}  </p>
            <h2> {{$id->body}}</h2>
           <hr>


<div class="comments">


   <ul class="list-group"> <h3>Comments </h3>



	@foreach($id->comment as $comments)

   

    <li class="list-group-item">
    	
     {{$comments->body}}

    </li>

	@endforeach
	</ul>

</div>


<div class="card">
	<div class="card-block">
		<form method="POST" action="/index/{{$id->id}}">

			{{csrf_field()}}

			<div  class="form-group">

				<textarea name="body" id="body" placeholder="add comment" class="form-control">
					
				</textarea>
			</div>

			<div  class="form-group">
				 
				 <button type="submit" class="btn btn-primary"> Add Comment </button>

			</div>
		</form>

		@include('layouts.errors')
	</div>
</div>
</div>
          </div>


@endsection