<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class CheckCharityRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (!auth()->check() ) {
            Alert::info('سجل الدخول', 'لتقديم طلب، يرجى تسجيل الدخول كجهة خيرية');
            return redirect('/charity/login'); // Redirect to login if not authenticated
        }


        // Check if the user has the 'charity' role
        if (auth()->user()->role !== 'charity') {
            Alert::info('سجل الدخول', 'لتقديم طلب، يرجى تسجيل الدخول كجهة خيرية');
            return redirect('/');
        }

        return $next($request);
    }
}
