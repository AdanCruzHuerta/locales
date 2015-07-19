<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'locales';

    protected $fillable = [
    						'nombre_local',
    						'razon_social',
    						'domicilio',
    						'codigo_postal',
    						'descripcion',
    						'numero_ext',
    						'numero_int',
    						'colonia',
    						'latitud',
    						'longitud',
    						'rfc',
    						'estatus_fiscal',
    						'referencia',
    						'sitio_web',
    						'facebook',
    						'instagram',
    						'whatsapp',
    						'municipios_id',
    						'perfil_empresario_id'
    					  ];
}
