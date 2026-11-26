@extends('layouts.app')
@section('title', 'Tambah Kategori')
@section('content')
<section class="form-card">
    <h2>~Tambah Kategori~</h2>
    <form method="POST" action="{{ route('kategori.store') }}">
        @csrf
        <label for="nama">Nama Kategori</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>
        @error('nama') <p class="error">{{ $message }}</p> @enderror

        <button type="submit">Simpan</button>
        <a href="{{ route('kategori.index') }}" class="kembali">Batal</a>
    </form>
</section>
@endsection
