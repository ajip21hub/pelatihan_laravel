@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Detail Buku Tamu</h2>
    <a href="{{ route('tamu.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $tamu->nama }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $tamu->email }}</p>
            <p class="card-text"><strong>Telepon:</strong> {{ $tamu->telepon }}</p>
            <p class="card-text"><strong>Pesan:</strong> {{ $tamu->pesan }}</p>
            <p class="card-text"><strong>Waktu:</strong> {{ $tamu->created_at->format('d-m-Y H:i') }}</p>
            <a href="{{ route('tamu.edit', $tamu->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('tamu.destroy', $tamu->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection
