@extends('master')

@section('content')

<a href="{{ route('users.create') }}">Create</a>

<hr>

<h2>Edit</h2>
@if (session()->has('message'))
  {{ session()->get('message') }}

@endif

<form action="{{ route('users.update', ['user' => $user->id]) }}" method="post>
  @csrf
  <input type="hidden" name="_method" value="PUT">
  <input type="text" name="firstName" value="{{ $user->firstName }}">
  <input type="text" name="lastName" value="{{ $user->lasttName }}">
  <input type="text" name="email" value="{{ $user->email }}">
  <button type="submit">Update</button>
</form>

@endsection