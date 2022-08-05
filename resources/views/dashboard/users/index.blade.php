@extends('dashboard.layouts.bingkai')

@section ('cari')

<form action="/dashboard/users">
        <div class="input-group mb-3">
          <input class="form-control" type="text" placeholder="Search" name="search" value="{{ request('search') }}">
          <button class="btn btn-danger md-3" type="submit">Search</button>
          
        </div>

        
      </form>

@endsection

<title>List Data</title>

@section ('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<title>List User</title>
	<h1 class="h2">List User</h1>
	
</div>

<div class="table-responsive col-lg-10">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Action</th>
              <!-- <th scope="col">Header</th> -->
            </tr>
          </thead>
          <tbody>

          	@foreach ($users as $user)

          	<tr>
          		<td>{{ $loop->iteration }}</td>
          		<td>{{ $user->name }}</td>
          		<td>{{ $user->username}}</td>
          		<td>{{ $user->email}}</td>
          		<td>
                <a href="/dashboard/users/{{ $user->id }}/edit" title="" class="badge bg-warning text-decoration-none">Edit</a>
                <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
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