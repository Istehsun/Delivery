@extends('layouts.app')



@section('content')

<div class="container">
  <h2 href="#">My Articles</h2>
</div>
   @foreach($articles as $article)

<div class="container">
 <div class="blog-post">
            <h2 class="blog-post-title"><a href="/index/{{$article->id}}">{{$article->title}}</a></h2>
            <p class="blog-post-meta">{{$article->created_at->toFormattedDateString()}}  </p>

           
           <hr>

           
          </div>
          </div>

   @endforeach  

  <div class="container"> <form action="/create"><button class="btn btn-primary" >  Create New Post </button>  </form></div>


@endsection