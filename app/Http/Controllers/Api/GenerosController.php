<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Genero;

class GenerosController extends Controller
{
    public function index() {
        $Genero = Genero::select('id', 'genero')->get();
        return $Genero;
    }
}
