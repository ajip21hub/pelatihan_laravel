@extends('layouts.app')

@section('content')
    <h1>Edit Siswa</h1>
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
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $siswa->nama) }}" required>
        </div>
        <div class="mb-3">
            <label for="usia" class="form-label">Usia</label>
            <input type="number" class="form-control" id="usia" name="usia" value="{{ old('usia', $siswa->usia) }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $siswa->alamat) }}" required>
        </div>
        <div class="mb-3">
            <label for="wali" class="form-label">Wali</label>
            <input type="text" class="form-control" id="wali" name="wali" value="{{ old('wali', $siswa->wali) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
