<?php 

namespace App\Models\Repositories;

use App\Models\Municipio;

class RepositorieMunicipio
{
	static function getMunicipios($request)
	{
		$municipios = Municipio::where('estados_id', $request->estado_id)->get();

		return $municipios;	
	}
}
