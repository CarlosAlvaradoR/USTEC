<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UsuariosExternosRestriccionesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->rol_id == 4) //Si el usuario es Externo lo redirige al dashboard
            //return redirect()->route('dashboard');
            return redirect()->route('prohibido');

        return $next($request); //El next le permitirá continuar
    }
}
