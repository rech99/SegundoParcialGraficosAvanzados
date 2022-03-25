<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Funcion;

class FuncionesController extends Controller
{
    public function index() {
        $Funcion = Funcion::select('id', 'id_pelicula', 'id_sala', 'fecha', 'hora')->get();
        return $Funcion;
    }
}
