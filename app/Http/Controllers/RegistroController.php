<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;

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
        //$formulario->nombre = $request->input('nombre');
        $formulario->ciudad = $request->ciudad;
        $formulario->email = $request->email;
        $formulario->telefono = $request->telefono;
        $formulario->grado = $request->grado;
        $formulario->save();

        dd($request->all());
        die();
    }
}
