<?php
/**
 * Created by PhpStorm.
 * User: nrjto
 * Date: 16.03.2018
 * Time: 20:26
 */

namespace App\Http\Middleware;


use Auth;
use Closure;

class AdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @param  string|null              $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::user()->hasRole('admin')) {
            return $next($request);
        }

        return redirect('login');
    }
}