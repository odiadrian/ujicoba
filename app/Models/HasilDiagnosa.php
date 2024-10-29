<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilDiagnosa extends Model
{
    protected $table = 'hasil_diagnosa';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
