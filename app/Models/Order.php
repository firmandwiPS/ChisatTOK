<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'price',
        'image_path', // Tambahkan semua kolom yang akan diisi
    ];
}
