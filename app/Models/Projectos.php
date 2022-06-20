<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectos extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 'slug', 'entradilla', 'texto1','texto2','texto3','alltecnicas','imagenes','logo','enlace1','enlace2','enlace3',
    ];
}
