@extends('layouts.app')
@section('title', 'Pengelolaan')
@section('content')
<section id="pengelolaan">
    <h2>~Pengelolaan Portofolio~</h2>

    @if (session('sukses'))
        <p class="sukses">{{ session('sukses') }}</p>
    @endif

    @if (auth()->user()->isAdmin())
        <p class="aksi-atas">
            <a href="{{ route('proyek.create') }}" class="tombol">+ Tambah Proyek</a>
        </p>
    @endif

    <div class="tabel-wrap">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Teknologi</th>
                    <th>Tahun</th>
                    <th>Status</th>
                    @if (auth()->user()->isAdmin())
                        <th>Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if ($p->gambar)
                                <img src="{{ asset($p->gambar) }}" alt="{{ $p->judul }}" width="80">
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $p->judul }}</td>
                        <td>{{ $p->kategori->nama }}</td>
                        <td>{{ $p->teknologi }}</td>
                        <td>{{ $p->tahun }}</td>
                        <td>{{ $p->status }}</td>
                        @if (auth()->user()->isAdmin())
                            <td>
                                <a href="{{ route('proyek.edit', $p) }}" class="tombol">Edit</a>
                                <form method="POST" action="{{ route('proyek.destroy', $p) }}"
                                      class="form-hapus"
                                      onsubmit="return confirm('Hapus proyek ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="tombol tombol-hapus">Hapus</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">Belum ada proyek.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection
