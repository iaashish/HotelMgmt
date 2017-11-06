<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Debugbar;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      Debugbar::info($guard);
    switch ($guard) {
        case 'admin':
          if (Auth::guard($guard)->check()) {
            return redirect('managerhome');
          }
          break;
        case 'staff':
          if (Auth::guard($guard)->check()) {
            return redirect('staffhome');
          }
          break;
        default:
          if (Auth::guard($guard)->check()) {
              return redirect('/home');
          }
          break;
      }
      return $next($request);
    }
}
