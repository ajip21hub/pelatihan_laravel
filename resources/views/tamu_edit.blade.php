@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Edit Buku Tamu</h2>
    <a href="{{ route('tamu.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    <form action="{{ route('tamu.update', $tamu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $tamu->nama) }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $tamu->email) }}" required>
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ old('telepon', $tamu->telepon) }}">
        </div>
        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="3">{{ old('pesan', $tamu->pesan) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
