<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;
    protected $table = 'riwayat';
    protected $fillable = [
        "total",
        'loket_a',
'loket_b',
'loket_c',
'loket_d',
'loket_e',
'loket_f',
'tangal',
    ];
}
