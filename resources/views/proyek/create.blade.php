@extends('layouts.app')
@section('title', 'Tambah Proyek')
@section('content')
<section class="form-card">
    <h2>~Tambah Proyek~</h2>
    <form method="POST" action="{{ route('proyek.store') }}">
        @csrf
        @include('proyek._form')

        <button type="submit">Simpan</button>
        <a href="{{ route('pengelolaan') }}" class="kembali">Batal</a>
    </form>
</section>
@endsection
