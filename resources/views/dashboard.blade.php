@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<section id="dashboard">
    <h2>~Dashboard~</h2>
    <p>
    Selamat datang, {{ $username }}<br>
    @if (auth()->user()->isAdmin())
        Anda login sebagai admin: dapat mengelola kategori dan proyek.
    @else
        Anda login sebagai user: hanya dapat melihat daftar proyek.
    @endif
</p>
    <div class="skill-container">
        <article class="skill-item"><h3>{{ $totalProyek }}</h3><p>Proyek</p></article>
        <article class="skill-item"><h3>{{ $totalKategori }}</h3><p>Kategori</p></article>
    </div>
</section>
@endsection
