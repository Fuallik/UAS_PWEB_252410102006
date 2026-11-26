<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Proyek;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    private array $biodata = [
        'Nama' => 'Mohamad Fauzi Febrianto',
        'NIM' => '252410102006',
        'Fakultas' => 'Ilmu Komputer',
        'Prodi' => 'Teknologi Informasi',
    ];

    private array $skills = ['Python', 'HTML', 'CSS', 'C#'];

    private array $kontak = [
        ['label' => 'Instagram', 'teks' => 'fauzi.febrianto02', 'url' => 'https://www.instagram.com/fauzi.febrianto02/'],
        ['label' => 'Email', 'teks' => 'fauzifebrianto2@gmail.com', 'url' => 'mailto:fauzifebrianto2@gmail.com'],
    ];

    public function dashboard()
    {
        return view('dashboard', [
            'username' => Auth::user()->username,
            'totalProyek' => Proyek::count(),
            'totalKategori' => Kategori::count(),
        ]);
    }

    public function pengelolaan()
    {
        return view('pengelolaan', [
            'username' => Auth::user()->username,
            'projects' => Proyek::with('kategori')->get(),
        ]);
    }

    public function profile()
    {
        $user = Auth::user();

        return view('profile', [
            'username' => $user->username,
            'role' => $user->role,
            'biodata' => $this->biodata,
            'skills' => $this->skills,
            'kontak' => $this->kontak,
        ]);
    }
}
