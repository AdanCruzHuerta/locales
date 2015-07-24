<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Guard;

use App\Http\Requests;
use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        if (Auth::attempt(['correo' => $request->correo, 'password' => $request->password])) {
            
            // Empresarios
            if ( Auth::user()->tipo_usuarios_id == 1) {

                return redirect('/admin');

            }

            if ( Auth::user()->tipo_usuarios_id == 2 ) {

                return "Clientes";

            }

        }

        return redirect('/')->withInput($request->except('password'))

                            ->with('failLogin','Revisa los datos. El correo o la contraseña no son correctos.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
