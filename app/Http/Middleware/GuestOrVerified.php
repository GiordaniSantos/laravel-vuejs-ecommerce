<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GuestOrVerified extends \Illuminate\Auth\Middleware\EnsureEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $redirectToRoute = null)
    {
        //se o usuário for convidado ele prossegue
        if (!$request->user()) {
            return $next($request);
        }

        //chamado o verificador de email (EnsureEmailIsVerified) (usuário logado)
        return parent::handle($request, $next, $redirectToRoute);
    }
}