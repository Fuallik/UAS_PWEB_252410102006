<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Proyek;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProyekController extends Controller
{
    private array $statusList = ['Selesai', 'Dalam Pengerjaan', 'Rencana'];

    public function create()
    {
        return view('proyek.create', [
            'kategoris' => Kategori::all(),
            'statusList' => $this->statusList,
        ]);
    }

    public function store(Request $request)
    {
        Proyek::create($this->validasi($request));

        return redirect()->route('pengelolaan')
            ->with('sukses', 'Proyek berhasil ditambahkan.');
    }

    public function edit(Proyek $proyek)
    {
        return view('proyek.edit', [
            'proyek' => $proyek,
            'kategoris' => Kategori::all(),
            'statusList' => $this->statusList,
        ]);
    }

    public function update(Request $request, Proyek $proyek)
    {
        $proyek->update($this->validasi($request));

        return redirect()->route('pengelolaan')
            ->with('sukses', 'Proyek berhasil diperbarui.');
    }

    public function destroy(Proyek $proyek)
    {
        $proyek->delete();

        return redirect()->route('pengelolaan')
            ->with('sukses', 'Proyek berhasil dihapus.');
    }

    private function validasi(Request $request): array
    {
        return $request->validate([
            'kategori_id' => 'required|exists:kategoris,id',
            'judul' => 'required|string|max:150',
            'teknologi' => 'required|string|max:100',
            'tahun' => 'required|integer|min:2000|max:2100',
            'status' => ['required', Rule::in($this->statusList)],
        ]);
    }
}
