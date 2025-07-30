@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Daftar Buku Tamu</h2>
    <a href="{{ route('tamu.create') }}" class="btn btn-success mb-3">Isi Buku Tamu</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Pesan</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tamus as $tamu)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tamu->nama }}</td>
                    <td>{{ $tamu->email }}</td>
                    <td>{{ $tamu->telepon }}</td>
                    <td>{{ $tamu->pesan }}</td>
                    <td>{{ $tamu->created_at->format('d-m-Y H:i') }}</td>
                    <td>
                        <a href="{{ route('tamu.show', $tamu->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('tamu.edit', $tamu->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('tamu.destroy', $tamu->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data tamu.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
