<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    /** @use HasFactory<\Database\Factories\PermintaanFactory> */
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *
     */

    protected $fillable = [
        'id_user',
        'jumlah_kopi',
        'new_alamat',
        'handphone'
        
    ];
    
}
