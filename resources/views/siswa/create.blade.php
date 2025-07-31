@extends('layouts.app')

@section('content')
    <h1>Tambah Siswa</h1>
    <a href="{{ route('siswa.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
        </div>
        <div class="mb-3">
            <label for="usia" class="form-label">Usia</label>
            <input type="number" class="form-control" id="usia" name="usia" value="{{ old('usia') }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
        </div>
        <div class="mb-3">
            <label for="wali" class="form-label">Wali</label>
            <input type="text" class="form-control" id="wali" name="wali" value="{{ old('wali') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
