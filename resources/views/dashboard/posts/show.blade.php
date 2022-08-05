@extends('dashboard.layouts.bingkai')
<title>Detail</title>
@section ('container')

<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h1 class="mb-3">{{ $post->title }}</h1>

      <p class="text-decoration-none">{{ $post->author->name }}</p>
      <a href="/dashboard/posts/{{ $post->slug }}/edit" title="" class="btn btn-warning text-decoration-none">Edit</a>
      <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
      </form>

      <article class="mt-4">
        {!! $post->body !!}
      </article>
      <a href="/dashboard/posts" class="text-decoration-none" title="">Back To List</a>
      
    </div>

    
  </div>
  
</div>

@endsection