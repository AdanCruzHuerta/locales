<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresario extends Model
{
    protected $table = 'perfil_empresario';

    protected $fillable = ['nombre_completo','telefono','celular'];
}
