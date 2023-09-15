<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeA extends Model
{
    use HasFactory;
    protected $table= 'typeA';
    protected $fillable= [
        'nomor_antrian','type','status'
    ];
}
