<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeD extends Model
{
    use HasFactory;
    protected $table= 'typeD';
    protected $fillable= [
        'nomor_antrian','type','status'
    ];
}
