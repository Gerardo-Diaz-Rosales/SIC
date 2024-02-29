<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
}

/*
 Accede a la clase Autenticate y modifica la ruta de
 redireccionamiento a usuarios no autenticados a
 una vista que describa lo siguiente: "Acceso No Autorizado"
*/


// return $request->expectsJson() ? null : route('login');
