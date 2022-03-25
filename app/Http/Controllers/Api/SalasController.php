<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Sala;

class SalasController extends Controller
{
    public function index() {
        $Sala = Sala::select('id', 'sala',)->get();
        return $Sala;
    }
}
