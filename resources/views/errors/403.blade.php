@extends('layouts.app')
@section('title', 'Akses Ditolak')
@section('content')
<section id="dashboard">
    <h2>~403 - Akses Ditolak~</h2>
    <p>{{ $exception->getMessage() ?: 'Anda tidak punya akses ke halaman ini.' }}</p>
    <p><a href="{{ route('dashboard') }}">Kembali ke Dashboard</a></p>
</section>
@endsection
