<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // AÑADE ESTO:
    protected $fillable = [
        'name',
        'email',
        // 'phone', // Descomenta si añadiste teléfono en tu migración
    ];
}
