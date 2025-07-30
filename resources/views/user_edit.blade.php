@extends('layouts.app')

@section('title', 'Edit Profil Pengguna')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Profil Pengguna</h1>
    <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('user.show', ['id' => $user->id]) }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
