<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Repositories\RepositorieMunicipio;

/*
|	RUTAS PUBLICAS
*/
get('/', function () {
	if (Auth::check()) {
		if(Auth::user()->tipo_usuarios_id == 1) {
			return redirect('/empresa-administrador');

		}
	}

    return view('sitio.index');
});


get('/register', 'LocalController@create');

post('/register', 'LocalController@store');

post('/login','LoginController@store');

get('/logout', 'LoginController@destroy');

/*
| 	RUTAS PRIVADAS EMPRESA
*/
Route::group(['middleware' => ['auth','empresario']], function () {

	get('/admin', function() {

		return view('admin.estadisticas');

	});

	get('/admin/local/caracteristicas', 'LocalController@caracteristicas');

	get('/admin/local/ubicacion', 'LocalController@ubicacion');

	get('/admin/local/galeria', 'LocalController@galeria');

	get('/admin/local/administracion', 'LocalController@administracion');

	post('/admin/local/administracion-accessos','LocalController@administracionAccessos');

	Route::resource('/admin/clientes','ClienteController');

	Route::resource('/admin/proveedores','ProveedorController');

	Route::resource('/admin/paquetes', 'PaqueteController');

	get('/admin/calendario', function() {

		return view('admin.calendario');

	});

});

/*
|	RUTAS PRIVADAS CLIENTE
*/

/*
|	RUTAS COMPLEMENTARIAS
*/


post('/municipios', function(Request $request) {

	$municipios = RepositorieMunicipio::getMunicipios($request);

	return response()->json($municipios);
	
});

post('/get-password', function(Request $request) {

	$response = App\Http\Controllers\Libraries\ResetPassword::reset($request);

	if ($response) {

		return redirect('/')->with('successCorreo','Hemos mandado una contraseña temporal a tu correo');

	}

	return redirect('/')->with('failCorreo','El correo introducido no existe');

});