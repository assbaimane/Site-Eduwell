<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class WebMasterVerification
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
        if($request->user()->role_id == 3) {
            return $next($request);
        }
        else{            $accessdenied = "Vous n'avez pas les droits pour accéder à cette page. En tant que WebMaster, seules les pages Testimonial et Contact vous sont autorisées. En tant que Membre, vous êtes juste autorisé à accéder à la page d'accueil.";
            return redirect()->route("dashboard")->with('message', $accessdenied);
        }
    }
}
