<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function destroy() {
    	echo "hi";
        die();
    }

    public function index() {
       
        echo "hi";
        die();
    }

    //
    public function create(Request $request) {
        echo "city:" .$request->ciudad;
        dd($request->all());
        die();
    }
}
