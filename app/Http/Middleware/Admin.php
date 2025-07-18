<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->type === 'admin' || Auth::guard('admin')->user()->type === 'pos') {
    //         return $next($request);
    //     }
    //     return redirect('/admin');
    // }

    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            return redirect('/admin'); 
        }

        // Get the authenticated user
        $user = Auth::guard('admin')->user();

        if ($user->type === 'admin' || $user->type === 'pos') {
            return $next($request);
        }

        return redirect('/admin')->with('error', 'Unauthorized access');
    }
}
