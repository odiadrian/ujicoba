<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyakitDiagnosa extends Model
{
    use HasFactory;

    protected $table = 'penyakitdiagnosa';

    protected $fillable = [
        'id_gejala',
        'id_penyakit',
        'created_at',
        'updated_at'
    ];

     // Relasi dengan model Penyakit
     public function penyakit()
     {
         return $this->belongsTo(Penyakit::class, 'id_penyakit');
     }
 
     // Relasi dengan model Gejala
     public function gejala()
     {
         return $this->belongsTo(Gejala::class, 'id_gejala');
     }
}
