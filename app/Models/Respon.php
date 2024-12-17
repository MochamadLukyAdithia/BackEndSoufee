<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    /** @use HasFactory<\Database\Factories\ResponFactory> */
    use HasFactory;

    protected $fillable = [
        'permintaan_id',
        'staff_id',
        'status_id',
        'jadwal_id'
    ];
}  
