<?php

namespace App\Http\Middleware;

use Closure;

class EnsureUserVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Cek apakah pengguna sudah diverifikasi atau belum
        if ($request->user() && !$request->user()->user_verified) {
            // Jika pengguna belum diverifikasi, arahkan ke halaman verifikasi atau tindakan lain yang sesuai
            return redirect()->route('dashboardpeserta');
        }
        return $next($request);
    }
}
