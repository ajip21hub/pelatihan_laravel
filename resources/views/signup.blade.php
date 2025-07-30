@extends('layouts.app')
@section('title', 'Signup Page')
@section('content')
    <div class="container">
        <h1 class="mt-5">Sign Up</h1>
        <p class="lead">Please fill in the form to create an account.</p>
        <form action="/signup" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input class="form-control" type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input class="form-control" type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input class="form-control" type="password" id="password" name="password" required>
            <br>
            <button class="btn btn-primary" type="submit">Sign Up</button>
        </form>
@endsection
