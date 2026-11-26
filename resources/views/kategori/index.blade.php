@extends('layouts.app')
@section('title', 'Kategori')
@section('content')
<section id="pengelolaan">
    <h2>~Kategori~</h2>

    @if (session('sukses'))
        <p class="sukses">{{ session('sukses') }}</p>
    @endif

    <p class="aksi-atas">
        <a href="{{ route('kategori.create') }}" class="tombol">+ Tambah Kategori</a>
    </p>

    <div class="tabel-wrap">
        <table>
            <thead>
                <tr>
                    <th>No</th><th>Nama</th><th>Jumlah Proyek</th><th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoris as $kategori)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kategori->nama }}</td>
                        <td>{{ $kategori->proyeks_count }}</td>
                        <td>
                            <a href="{{ route('kategori.edit', $kategori) }}" class="tombol">Edit</a>
                            <form method="POST" action="{{ route('kategori.destroy', $kategori) }}"
                                  class="form-hapus"
                                  onsubmit="return confirm('Hapus kategori ini beserta semua proyek di dalamnya?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="tombol tombol-hapus">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
