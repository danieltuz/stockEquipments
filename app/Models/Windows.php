<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Windows extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre','slug'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    }

