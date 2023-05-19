<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'slug',
        'equipo',
        'marcas_id'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

}

