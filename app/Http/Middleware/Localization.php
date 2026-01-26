<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
class Localization
{
    public function handle(Request $request, Closure $next)
    {
        // Idioma guardado en sesión
        if (session()->has('locale')) {
            App::setLocale(session('locale'));
        }

        return $next($request);
    }
}
