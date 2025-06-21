<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string|min:5',
        ]);



        Mail::to('jfernandaclarosv@gmail.com')->send(
            new ContactoMailable(
                $request->nombre,
                $request->email,
                $request->mensaje
            )
        );


       return redirect('/#contacto')->with('success', 'Tu mensaje fue enviado con éxito. ¡Gracias por contactarnos!');

    }
}
