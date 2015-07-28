<?php

namespace App\Http\Controllers\Libraries;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    
    static function send($request)
    {
        // guardamos datos enviados desde el form en un array
        $data = $request->all();

        \Mail::send('emails.message', $data, function($message) use ($request)
        {
            //remitente
            $message->from('adancruzhuerta@gmail.com', 'ADÁN CRUZ HUERTA');
 
            //asunto
            $message->subject('LOCALES SHARK-AMISI');
 
            //receptor
            $message->to($request->correo, $request->nombre);
 
        });

        return true;
    }

    static function sendPassword($correo, $password)
    {
        $data = ['correo'=>$correo,'password'=>$password];

        \Mail::send('emails.messagePassword', $data, function($message) use ($correo, $password)
        {
            //remitente
            $message->from('adancruzhuerta@gmail.com', 'ADÁN CRUZ HUERTA');
 
            //asunto
            $message->subject('LOCALES SHARK-AMISI - RESTABLECER CONTRASEÑA');
 
            //receptor
            $message->to($correo);

        });

        return true;
    }

    static function sendNotificationChangeAccessos()
    {
        
    }
}
