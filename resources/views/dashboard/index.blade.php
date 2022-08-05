@extends('dashboard.layouts.bingkai')

<title>Dashboard</title>

@section ('container')
<h1 class="h2 text-center mt-4">Welcome To Your Home, {{ auth()->user()->name }}</h1>

@endsection