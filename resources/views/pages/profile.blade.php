@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h2>Profile</h2>

    <p><strong>Full Name:</strong> {{ $user->full_name }}</p>
    <p><strong>Username:</strong> {{ $user->username }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
@endsection