<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienDiagnosis extends Model
{
    use HasFactory;
    protected $table = 'pasien_diagnosis';
    protected $fillable = [
        'user_id',
        'gejala',
        'penyakit_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}
