<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PenyakitGejala extends Pivot
{
    protected $table = 'penyakitdiagnosa';
    public $timestamps = false;
}
