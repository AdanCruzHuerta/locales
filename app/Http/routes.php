<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;


use App\Models\Municipio;
/*	
|	RUTAS PUBLICAS
*/
get('/', function () {
    return view('sitio.index');
});

get('/register', 'LocalController@create');

post('/register', 'LocalController@store');

/*
| 	RUTAS PRIVADAS EMPRESA
*/

/*
|	RUTAS PRIVADAS CLIENTE
*/

/*
|	RUTAS COMPLEMENTARIAS
*/

/*get('/users', function() {
	
	return DB::table('usuarios')->get();

});*/

post('/municipios', function(Request $request) {

	$municipios = Municipio::where('estados_id', $request->estado_id)->get();

	return response()->json($municipios);

});