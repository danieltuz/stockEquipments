<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model
{
    use HasFactory;

    protected $fillable= [
        'direccion_id',
        'subdireccion_id',
        'nombre',
        'slug'
    ];

    protected $guarded = [
        'id','created_at','updated_at'
    ];

}
