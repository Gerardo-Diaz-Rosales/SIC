<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtegidoController extends Controller
{
    public function __invoke()
    {
        return "Acceso denegaado 😢";
    }
}
