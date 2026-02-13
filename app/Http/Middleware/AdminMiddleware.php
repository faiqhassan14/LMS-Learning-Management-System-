<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user(); // safe, returns null if not logged in

        if (!$user) {
            abort(401, 'Unauthorized'); // not logged in
        }

        if ($user->role !== 'admin') {
            abort(403, 'Access Denied'); // logged in but not admin
        }

        return $next($request); // user is admin
    }
}
