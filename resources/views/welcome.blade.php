@extends('layouts.app')

@section('title', 'Welcome Page')
@section('content')
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 mb-3">Selamat Datang di Kampus Digital</h1>
                <p class="lead">Platform pelatihan online modern untuk mahasiswa, dosen, dan profesional. Temukan berbagai kursus, webinar, dan komunitas pembelajaran digital di satu tempat.</p>
                <a href="/signup" class="btn btn-success btn-lg mt-3">Daftar Sekarang</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=600&q=80" alt="Kampus Digital" class="img-fluid rounded shadow">
            </div>
        </div>
        <hr class="my-5">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Kursus Interaktif</h5>
                        <p class="card-text">Akses ratusan kursus digital dengan materi terbaru dan pengajar profesional.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Webinar & Event</h5>
                        <p class="card-text">Ikuti webinar, workshop, dan event eksklusif untuk memperluas wawasanmu.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Komunitas Aktif</h5>
                        <p class="card-text">Bergabung dengan komunitas pembelajar dan profesional di bidang digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <p class="mb-0">© {{ date('Y') }} Kampus Digital - All rights reserved.</p>
@endsection