<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->user()->role_id == 1) {
            return $next($request);
        }
        else{
            $accessdenied = "Vous n'avez pas les droits pour accéder à cette page";
            return redirect()->route("dashboard")->with('message', $accessdenied);
        }
    }
}
