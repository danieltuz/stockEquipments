<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hdd extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo',
        'tamanio',
        'slug'
    ];

    protected $guarded = [
        'created_at','updated_at'
    ];


}
