@extends('layouts.app')
@section('title', 'Edit Proyek')
@section('content')
<section class="form-card">
    <h2>~Edit Proyek~</h2>
    <form method="POST" action="{{ route('proyek.update', $proyek) }}">
        @csrf
        @method('PUT')
        @include('proyek._form')

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('pengelolaan') }}" class="kembali">Batal</a>
    </form>
</section>
@endsection
