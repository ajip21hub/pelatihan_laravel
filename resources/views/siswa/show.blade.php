@extends('layouts.app')

@section('content')
    <h1>Detail Siswa</h1>
    <a href="{{ route('siswa.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $siswa->nama }}</h5>
            <p class="card-text"><strong>Usia:</strong> {{ $siswa->usia }}</p>
            <p class="card-text"><strong>Alamat:</strong> {{ $siswa->alamat }}</p>
            <p class="card-text"><strong>Wali:</strong> {{ $siswa->wali }}</p>
        </div>
    </div>
@endsection
