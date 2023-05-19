<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo',
        'frecuencia',
        'tipo_frecuencia',
        'slug'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

}
