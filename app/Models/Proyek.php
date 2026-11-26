<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $fillable = ['kategori_id', 'judul', 'teknologi', 'tahun', 'status', 'gambar'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
