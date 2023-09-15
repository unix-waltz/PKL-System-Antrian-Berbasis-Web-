<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeE extends Model
{
    use HasFactory;
    protected $table= 'typeE';
    protected $fillable= [
        'nomor_antrian','type','status'
    ];
}
