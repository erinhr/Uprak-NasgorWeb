<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foods extends Model
{
    protected $table = 'foods';
    protected $fillable = [
        'gambar',
        'nama',
        'harga',
    ];
}
