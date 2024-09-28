<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica si el usuario está autenticado y tiene el rol de Administrador
        if (Auth::check() && Auth::user()->hasRole('Administrador')) {
            return $next($request); // Si tiene el rol, deja pasar
        }

        // Si no tiene el rol, redirige al home
        return redirect()->route('root');
    }
}
