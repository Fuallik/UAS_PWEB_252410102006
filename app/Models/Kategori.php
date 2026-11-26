<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama'];

    public function proyeks()
    {
        return $this->hasMany(Proyek::class);
    }
}
