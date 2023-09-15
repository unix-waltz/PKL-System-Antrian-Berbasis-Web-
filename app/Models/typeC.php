<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeC extends Model
{
    use HasFactory;
    protected $table= 'typeC';
    protected $fillable= [
        'nomor_antrian','type','status'
    ];
}
