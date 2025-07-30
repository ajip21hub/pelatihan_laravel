<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User}</title>
</head>
<body>
    @extends('layouts.app')

    @section('title', 'Profil Pengguna')
    @section('content')
        <div class="container mt-5">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <h1 class="mb-4">Profil Pengguna</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <p><strong>ID:</strong> {{ $id }}</p>
                    @isset($user)
                        <p><strong>Nama:</strong> {{ $user->name }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                    @endisset
                </div>
            </div>
           
        </div>
    @endsection

    @section('footer')
    <p class="mb-0">© {{ date('Y') }} Kampus Digital - All rights reserved.</p>
@endsection
</body>
</html>