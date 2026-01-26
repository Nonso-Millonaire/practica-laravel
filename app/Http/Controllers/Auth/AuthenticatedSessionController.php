<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // 1. Guardamos el idioma actual antes de borrar la sesión
        $locale = $request->session()->get('locale');

        Auth::guard('web')->logout();

        // 2. Aquí Laravel destruye la sesión
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // 3. Volvemos a guardar el idioma en la nueva sesión limpia
        if ($locale) {
            $request->session()->put('locale', $locale);
        }

        return redirect('/');
    }
}
