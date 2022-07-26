<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use App\Models\Medicamento;
use App\Models\Empleado;
use Illuminate\Http\Request;

/**
 * Class TratamientoController
 * @package App\Http\Controllers
 */
class CoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /*var tratamientos es igual a todos los tratamientos de mi base de datos
     todos mis tratamientos
     operacion con datos*/
    public function index()
    {
        $tratamientos = Tratamiento::paginate();
        $empleados = Empleado::pluck('Nombre', 'id');

        return view('core.index', compact('tratamientos', 'empleados'))
            ->with('i', (request()->input('page', 1) - 1) * $tratamientos->perPage());
    }

    public function defensag(){
        return view('core.defensag');
    }

}