<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    /** @use HasFactory<\Database\Factories\TransaksiFactory> */
    use HasFactory;
    protected $fillable = [
        'deskripsi',
        'id_gudang',
        'id_kualitas_kopi',
        'id_pembayaran'
    ];
}
