@extends('dashboard.layouts.bingkai')

@section ('cari')

 <form action="/dashboard/posts">
        <div class="input-group mb-3">
          <input class="form-control" type="text" placeholder="Search" name="search" value="{{ request('search') }}">
          <button class="btn btn-danger md-3" type="submit">Search</button>
          
        </div>

        
      </form>

@endsection

<title>List Data</title>

@section ('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<title>List Data</title>
	<h1 class="h2">List Data</h1>
	
</div>

@if(session()->has('success'))
<div class="btn btn-success">
	{{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-10 text-start">
	<a href="/dashboard/posts/create" class="btn btn-dark mb-3">Create</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Benda</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="text-start">

          	@foreach ($posts as $post)

          	<tr>
          		<td>{{ $loop->iteration }}</td>
          		<td>{{ $post->author->name }}</td>
          		<td>{{ $post->title }}</td>
          		<td>{{ $post->category->name }}</td>
          		<td>
          			<a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-decoration-none">Detail</a>
          			<a href="/dashboard/posts/{{ $post->slug }}/edit" title="" class="badge bg-warning text-decoration-none">Edit</a>
          			<form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
          				@method('delete')
          				@csrf
          				<button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">Delete</button>
          			</form>
          		</td>
          	</tr>

          	@endforeach
            
          </tbody>
        </table>
      </div>

@endsection