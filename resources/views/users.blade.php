@extends('master')

@section('content')

<h2>Users</h2>

<ul>
  @foreach ($users as $user)
  <li>{{ $user->firstName }} | <a href="{{ route('users.edi',['user' => $user->id]) }">Edit</a> | <a href="{{ route('user.show', ['user' => $user->id]) }}">Show</a></li>
  @endforeach
</ul>

@endsection