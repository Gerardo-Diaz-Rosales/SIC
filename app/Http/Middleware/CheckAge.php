<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Verificar si el usuario está autenticado
        if (Auth::check()) {
            // Si el usuario está autenticado y accede a la ruta "admin", continuar con la solicitud
            if ($request->is('admin')) {
                return $next($request);
            }
            // Si el usuario está autenticado pero no accede a la ruta "admin", continuar con la solicitud
            return $next($request);
        }

        // Si el usuario no está autenticado y accede a la ruta "admin", redirigir a la vista 'protegido'
        if ($request->is('admin')) {
            return redirect()->route('protegido');
        }

        // Si el usuario no está autenticado y no accede a la ruta "admin", continuar con la solicitud
        return $next($request);
    }
}
