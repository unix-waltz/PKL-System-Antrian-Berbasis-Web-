<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penguna extends Model
{
    use HasFactory;
    protected $table= 'penguna';
    protected $fillable= [
        'nomor_antrian','type','status'
    ];
}
