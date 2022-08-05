@extends('dashboard.layouts.bingkai')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<title>Edit Data</title>
	<h1 class="h2">Edit Data</h1>
	
</div>
@if(session()->has('success'))
<div class="btn btn-success">
	{{ session('success') }}
</div>
@endif

<div class="col-lg-8 text-start">
	<form method="post" action="/dashboard/users/{{ $user->id }}">
		@method('put')
		@csrf
		<div class="mb-3">
			<label for="name" class="form-label">Name</label>
			<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $user->name) }}">
			@error('name')
			<div class="invalid-feedback">
				{{ $message }}
				
			</div>
			@enderror
		</div>

		<div class="mb-3">
			<label for="username" class="form-label">Username</label>
			<input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username', $user->username) }}">
			@error('username')
			<div class="invalid-feedback">
				{{ $message }}
				
			</div>
			@enderror
		</div>

		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $user->email) }}">
			@error('email')
			<div class="invalid-feedback">
				{{ $message }}
				
			</div>
			@enderror
		</div>



		<button type="submit" class="btn btn-primary">Update Data</button>
	</form>
</div>

@endsection