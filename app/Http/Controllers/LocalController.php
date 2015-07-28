<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use Illuminate\Http\Response;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use Hash;

    use App\Models\User;
    use App\Models\Estado;
    use App\Models\TipoLocal;
    use App\Models\TipoEvento;
    use App\Models\CapacidadLocal;
    use App\Models\CaracteristicaLocal;
    use App\Models\ServicioExtra;
    use App\Models\Repositories\RepositorieLocal;
    use App\Http\Controllers\Libraries\EmailController;

class LocalController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $estados = Estado::all();

        return view('sitio.registro', compact('estados'));
    }

    public function store(Request $request)
    {
        $store = RepositorieLocal::saveLocal($request);

        if($store) {

            EmailController::send($request); 
               
            return response()->json(['result' => true, 'mensaje' => 'Felicidades ahora eres parte de locales.mx']);    
        
        }

        return response()->json(['result' => false]);

        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function caracteristicas()
    {
        // en general
        $data['tipos_local'] = TipoLocal::all();

        $data['capacidades_local'] = CapacidadLocal::all();

        $data['tipos_evento'] = TipoEvento::all();

        $data['caracteristicas_local'] = CaracteristicaLocal::all();

        $data['servicios_extra'] = ServicioExtra::all();

        //particular de cada cliente

        return view('admin.caracteristicas', compact('data'));
    }

    public function ubicacion()
    {   
        $estados = Estado::all();

        $data = RepositorieLocal::datosUbicacion();

        return view('admin.ubicacion', compact('estados','data'));
    }

    public function galeria() 
    {
        return view('admin.galeria');
    }

    public function administracion()
    {
        $data = RepositorieLocal::datosAdministrativos();

        return view('admin.datosAdministracion', compact('data'));
    }

    public function administracionAccessos(Request $request)
    {
        $usuario = User::find($request->id_user);

        $usuario->correo = $request->correo;

        $usuario->password = \Hash::make($request->password);

        $usuario->save();

        EmailController::sendNotificationChangeAccessos();
    }

    public function nameEmpresa()
    {
        return RepositorieLocal::nameEmpresa();
    }

    public function destroy($id)
    {
        //
    }
}
