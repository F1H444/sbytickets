<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (! $request->user()) {
            abort(403, 'Unauthorized');
        }

        if ($role === 'admin' && ! $request->user()->is_admin) {
            abort(403, 'Unauthorized access. Admin only.');
        }

        if ($role === 'user' && $request->user()->is_admin) {
            // Technically an admin can access user area too, but let's keep it consistent with the previous check's intent if needed.
            // Or just allow it. Leaving it for now.
        }

        return $next($request);
    }
}
