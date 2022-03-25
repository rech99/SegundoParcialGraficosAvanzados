<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pelicula;

class PeliculasController extends Controller
{
    public function index() {
        $Pelicula = Pelicula::select('id', 'id_genero', 'nombre', 'director')->get();
        return $Pelicula;
    }
}
