<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class FilamentAuthMiddleware extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    protected function authenticate($request, array $guards): void
    {
        $this->auth->authenticate($guards);

        $user = $this->auth->user();

        if ($user->role === 'penilai') {
            abort(403);
        }
    }

    protected function redirectTo($request): string
    {
        return route('login');
    }
}
