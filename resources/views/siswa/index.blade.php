@extends('layouts.app')

@section('content')
    <h1>Daftar Siswa</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>
    <table class="table table-bordered table-responsive mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Usia</th>
                <th>Alamat</th>
                <th>Wali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($siswas as $siswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->usia }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td>{{ $siswa->wali }}</td>
                    <td class="d-flex">
                        <a href="{{ route('siswa.show', $siswa->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data siswa</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-3 d-flex justify-content-center">
        {{ $siswas->onEachSide(1)->links('pagination::bootstrap-4') }}
    </div>
@endsection
