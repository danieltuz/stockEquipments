<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baja extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipo_id',
        'fecha_baja',
        'obs_baja',
        'n_orden',
        'fecha_reporte',
        'descripcion'
    ];


    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

}
