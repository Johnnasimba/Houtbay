<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class customAuth
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

        if(!session()->has('data'))
            {
            return redirect('login');
            }


     //   $path = $request->path();
    //     if($path === "login"){
    //         return redirect('/');
    //    }
    return $next($request);
    }
}
