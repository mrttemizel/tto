<?php

namespace App\Http\Middleware\Back;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isRoleEditor
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
        if(Auth::user()->status==1  or Auth::user()->status==0 ){
            return $next($request);
        }
        abort(403,"Giriş İzniniz Yok");
    }
}