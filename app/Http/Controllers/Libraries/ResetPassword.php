<?php

namespace App\Http\Controllers\Libraries;

use App\Models\User;
use App\Http\Controllers\Libraries\EmailController;

class ResetPassword 
{

	static function reset($request)
	{
		$usuario = User::where('correo',$request->correo)->first();

		if(count($usuario) > 0) {
			
			$psw = "";

			for($i = 0; $i <= 9; $i++) {

				$psw .= substr('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890', rand(0,62), 1);
			}

			$usuario->password = \Hash::make($psw);

			$usuario->save();
				
			EmailController::sendPassword($request->correo, $psw);

			return true;
		
		}

		return false;
	}
}