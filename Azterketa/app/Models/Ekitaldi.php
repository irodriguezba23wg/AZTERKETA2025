<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekitaldi extends Model
{
    use HasFactory;

    protected $fillable = [
        'izena',
        'data',
        'azalpena',
    ];

    
    protected $table = 'ekitaldiak'; 
}
