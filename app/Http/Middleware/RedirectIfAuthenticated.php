<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, ...$guards)
    {
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if ($guard == 'company') {
                    return redirect()->route('company.dashboard');
                }

                return redirect('/home'); // or wherever you want to redirect other users
            }
        }

        return $next($request);
    }
}
