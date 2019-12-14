<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermissions {

     /**
       * Handle an incoming request.
       *
       * @param  \Illuminate\Http\Request $request
       * @param  \Closure $next
       * @return mixed
     */
    public function handle ($request, \Closure $next)
    {
        $isAdmin = auth()->user()->type;

        if ($isAdmin == 1) {
            return $next($request);
        }
        session()->flash('mensagem', 'Esta área é reservada soment aos admnistradores!');
        return redirect()->route('requests.index');
    }

}