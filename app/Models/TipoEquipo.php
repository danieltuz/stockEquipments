<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEquipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'nombre',
        'slug'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
