<?php

namespace App\Exports;

use App\Models\Registro;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    public $fechaInicio;
    public $fechaFin;

    /**
     * Metodo constructor
     * Necesitamos dos parametros, fecha inicio y fecha fin
     */
    public function __construct($fechaInicio, $fechaFin)
    {
        $this->$fechaInicio = $fechaInicio;
        $this->$fechaFin = $fechaFin;
        return $fechaInicio;
        //return Registro::where("ciudad", "cali");
     //   dd($fechaInicio);
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       return Registro::orderBy("created_at", 'desc')
       ->select("nombre_apellidos", "ciudad", "telefono", "email", "grado", "created_at")
       ->get();
    }
}
