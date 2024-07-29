<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Suport\Facades\Mail;
use App\mail\MensajeRecibido;
//use Mail;
use App\Mail\Signedup;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store(){
       $mensaje = request()->validate([
            'nombre' => 'required',
            'email' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required',
        ],[
            'nombre.required' => 'Ingresa tu nombre completo',
            'email.required' => 'Ingresa tu correo',
            'asunto.required' => 'Ingresa el asunto del mensaje',
            'mensaje.required' => 'Ingresa el mensaje a enviar',
        ]);
        Mail::to('t512700120@unitru.edu.pe')->send(new MensajeRecibido($mensaje));
        //return new MensajeRecibido($mensaje);
        //return 'Mensaje Enviado';

        return back()->with('estado','Gracias por ponerte en contacto, te respondremos en la brevedad posible');

    }
}
