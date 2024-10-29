<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    protected $table = 'gejala'; // Pastikan nama tabel sesuai

    public function penyakit()
    {
        return $this->belongsToMany(Penyakit::class, 'penyakitdiagnosa', 'id_gejala', 'id_penyakit')
                    ->withPivot('bobot_nilai');
    }
}