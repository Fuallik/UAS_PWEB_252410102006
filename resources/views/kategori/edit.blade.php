@extends('layouts.app')
@section('title', 'Edit Kategori')
@section('content')
<section class="form-card">
    <h2>~Edit Kategori~</h2>
    <form method="POST" action="{{ route('kategori.update', $kategori) }}">
        @csrf
        @method('PUT')
        <label for="nama">Nama Kategori</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama', $kategori->nama) }}" required>
        @error('nama') <p class="error">{{ $message }}</p> @enderror

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('kategori.index') }}" class="kembali">Batal</a>
    </form>
</section>
@endsection
