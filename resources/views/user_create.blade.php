@extends('master')

@section('content')

<a href="{{ route('users.create') }}">Create</a>

<hr>

<h2>Create</h2>
@if (session()->has('message'))
  {{ session()->get('message') }}

@endif

<form action="{{ route('users.store') }}" method="post>
  @csrf
  <input type="hidden" name="_method" placeholder="Your firstName">
  <input type="text" name="firstName" placeholder="Your lastName"> 
  <input type="text" name="lastName" placeholder="Your email">
  <input type="text" name="email" placeholder="Your password">
  <button type="submit">Create</button>
</form>

@endsection