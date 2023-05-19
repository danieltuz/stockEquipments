<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procesador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre','slug','socket'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

}

