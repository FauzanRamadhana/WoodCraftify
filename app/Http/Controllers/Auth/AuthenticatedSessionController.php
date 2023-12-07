<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cookie;

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

        // Check the role of the authenticated user
        if (Auth::user()->role === 'admin') {
            // Redirect to the admin home page
            return redirect()->intended(RouteServiceProvider::ADMIN);
        } elseif (Auth::user()->role === 'user') {
            // Redirect to the user home page
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        // Check if the "remember_me" cookie is set
        if ($request->hasCookie('remember_me')) {
            // Handle the "remember_me" cookie as needed (e.g., set a longer session lifetime)
            // For example, you might extend the session duration:
            $minutes = 30 * 24 * 60; // 30 days
            config(['session.lifetime' => $minutes]);
        }

        // Default redirect if the role is not recognized
        // return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}