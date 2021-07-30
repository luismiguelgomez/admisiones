<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Mail\CorreoSolicitanteAdmi;

class RegistroController extends Controller
{
    public function destroy() {
    	echo "hi";
        die();
    }

    /**Obtiene el Request de la landing
     * Guardamos los datos
    */
    public function create(Request $request) {
        
        $formulario = new Registro;
        $formulario->nombre_apellidos = $request->nombre;
        $formulario->ciudad = $request->ciudad;
        $formulario->email = $request->email;
        $formulario->telefono = $request->telefono;
        $formulario->grado = $request->grado;
        $formulario->save();

        $details = [
            'body' => 'cuerpo correo',
            'nombre' => $request->nombre,
            'ciudad' => $request->ciudad,
            'correo' => $request->email,
            'telefono' => $request->telefono,
            'grado' => $request->grado
        ];

        //Enviar el email
        Mail::to("analistaweb@uniagustiniana.edu.co")->send(new TestMail($details));
        Mail::to("analistaweb@uniagustiniana.edu.co")->send(new CorreoSolicitanteAdmi());
        return view ('correoEnviado');
    }
}
