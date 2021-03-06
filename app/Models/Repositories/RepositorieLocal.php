<?php 

namespace App\Models\Repositories;

 use App\Models\User;
 use App\Models\Empresario;
 use App\Models\Local;

class RepositorieLocal
{
	static function saveLocal($request) 
	{

		try{
			
			\DB::beginTransaction();

			if($request->has('rfc_f')) {
	           
	            $rfc = $request->rfc_f;
	        
	        }

	        if($request->has('rfc_m')) {
	            
	            $rfc = $request->rfc_m; 
	       
	        }

	        $usuario = new User;

	        $usuario->correo            = $request->correo;

	        $usuario->password          = \Hash::make($request->password);

	        $usuario->tipo_usuarios_id  = 1; // usuario tipo empresario

	        $usuario->save();

	        $empresario = new Empresario;

	        $empresario->nombre_completo    = $request->nombre_completo;

	        $empresario->telefono           = $request->telefono;

	        $empresario->celular            = $request->celular;

	        $empresario->usuarios_id        = $usuario->id;

	        $empresario->save();

	        $local = new Local;

	        $local->nombre_local        = $request->nombre_local;
	        
	        $local->razon_social        = $request->razon_social;
	        
	        $local->domicilio           = $request->domicilio;
	        
	        $local->codigo_postal       = $request->codigo_postal;
	        
	        $local->descripcion         = $request->descripcion;
	        
	        $local->numero_ext          = $request->numero_ext;
	        
	        $local->numero_int          = $request->numero_int;
	        
	        $local->colonia             = $request->colonia;
	        
	        $local->latitud             = $request->latitud;
	        
	        $local->longitud            = $request->longitud;
	        
	        $local->rfc                 = $rfc;
	        
	        $local->estatus_fiscal      = $request->estatus_fiscal;
	        
	        $local->referencia          = $request->referencia;
	        
	        $local->sitio_web           = $request->sitio_web;
	        
	        $local->facebook            = $request->facebook;
	        
	        $local->instagram           = $request->instagram;
	        
	        $local->whatsapp            = $request->whatsapp;
	        
	        $local->municipios_id       = $request->municipio_id;

	        $local->perfil_empresario_id = $empresario->id;

	        $local->save();

	        \DB::commit();

	        return true;
	    }
	    catch(Exception $ex)
		{

			\DB::rollback();

			return false;
		}
	}

	static function nameEmpresa()
	{
		$local = \DB::table('usuarios')

            ->join('perfil_empresario', 'usuarios.id', '=', 'perfil_empresario.usuarios_id')
          
            ->join('locales', 'perfil_empresario.id', '=', 'locales.perfil_empresario_id')

            ->where('usuarios.id', '=', \Auth::user()->id)
          
            ->select('locales.razon_social')
          
            ->first();

        return $local;
	}

	static function datosAdministrativos()
	{
		$data = \DB::table('usuarios')

			->join('perfil_empresario', 'usuarios.id', '=', 'perfil_empresario.usuarios_id')
          
            ->join('locales', 'perfil_empresario.id', '=', 'locales.perfil_empresario_id')

            ->where('usuarios.id', '=', \Auth::user()->id)

            ->select('usuarios.correo','perfil_empresario.nombre_completo','locales.nombre_local',
            		 
            		 'locales.razon_social', 'locales.estatus_fiscal', 'locales.rfc',

            		 'locales.sitio_web', 'locales.facebook', 'locales.instagram',

            		 'locales.whatsapp')

            ->first();

        return $data;
	}

	static function datosUbicacion()
	{
		$data = \DB::table('usuarios')

			->join('perfil_empresario', 'usuarios.id', '=', 'perfil_empresario.usuarios_id')
          
            ->join('locales', 'perfil_empresario.id', '=', 'locales.perfil_empresario_id')

            ->join('municipios', 'locales.municipios_id', '=', 'municipios.id')

            ->join('estados', 'municipios.estados_id', '=', 'estados.id')

            ->where('usuarios.id', '=', \Auth::user()->id) 

            ->select('estados.id as estado','municipios.id as municipio','locales.colonia',

            		 'locales.codigo_postal','locales.domicilio','locales.numero_ext',

            		 'locales.numero_int','locales.referencia','locales.descripcion',

            		 'locales.latitud', 'locales.longitud')

            ->first();

        return $data;
	}
}