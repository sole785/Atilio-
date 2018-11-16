<?php

namespace AtilioDominguez\Http\Controllers;

use Illuminate\Http\Request;
use AtilioDominguez\User;
use Mail;

class MailController extends Controller
{
    public function index() {

        $user = User::where('isActive', false)->orderBy('id', 'desc')->first(); 

    	$lastUser = array(
            'name' => $user->name,
            'cuit' => $user->cuit,
            'razon_social' => $user->razon_social,
            'telefono' => $user->telefono,
            'celular' => $user->celular,
            'direccion' => $user->direccion,
            'password' => $user->password

        );

    	Mail::send('mail', $lastUser, function ($message) {
    	    $message->from('example@gmail.com'); //Colocar el mismo correo que el configurado en .ENV
    	    $message->to('example@gmail.com');
    	    $message->subject('¡Nuevo usuario registrado!');
    	});

    	return redirect('/productos');

    }
}
