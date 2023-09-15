<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeB extends Model
{
    use HasFactory;
    protected $table= 'typeB';
    protected $fillable= [
        'nomor_antrian','type','status'
    ];
}
