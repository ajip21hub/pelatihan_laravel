@extends('layouts.app')
@section('title', 'Login Page')
@section('content')
    <div class="container">
        <h1 class="mt-5">Login</h1>
        <p class="lead">Please enter your credentials to login.</p>
        <form action="/login" method="POST">
            @csrf
            <label for="email">Email:</label>
            <input class="form-control" type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input class="form-control" type="password" id="password" name="password" required>
            <br>
            <button class="btn btn-primary"  type="submit">Login</button>
        </form>
@endsection
