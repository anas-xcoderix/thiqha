<?php

namespace App\Http\Middleware;

use App\Enums\UserRole;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
    /**
     * @param  string  ...$roles  Allowed role values, e.g. middleware('role:admin')
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        $user = $request->user();

        if ($user === null) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $current = $user->role instanceof UserRole
            ? $user->role->value
            : (string) $user->role;

        foreach ($roles as $allowed) {
            if ($current === $allowed) {
                return $next($request);
            }
        }

        abort(Response::HTTP_FORBIDDEN);
    }
}
