<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
        'jenis',
        'ukuran',
        'deskripsi',
        'harga',
        'image',
    ];
    protected $table = 'product';
}
