<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKost extends Model
{
    use HasFactory;
    protected $table = 'datakost';

    protected $fillable= [
        'gambar',
        'namakost',
        'alamat',
        'harga',
        'fasilitas',
        'tipekost',
        'sistemkontrak'
    ];
}
