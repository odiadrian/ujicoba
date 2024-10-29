<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = 'penyakit'; // Pastikan nama tabel sesuai

    public function gejala()
    {
        return $this->belongsToMany(Gejala::class, 'penyakitdiagnosa', 'id_penyakit', 'id_gejala')
                    ->withPivot('bobot_nilai');
    }
}