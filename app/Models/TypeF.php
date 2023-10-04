<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeF extends Model
{
    use HasFactory;
    protected $table= 'typeF';
    protected $fillable= [
        'nomor_antrian','type','status'
    ];
}
