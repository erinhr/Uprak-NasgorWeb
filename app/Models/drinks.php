<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drinks extends Model
{
    protected $table = 'drinks';
    protected $fillable = [
        'gambar',
        'nama',
        'harga',
    ];
}
