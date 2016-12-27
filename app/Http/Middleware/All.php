<?php

namespace App\Http\Middleware;



use Closure;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;



class All {



    /**

     * Handle an incoming request.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \Closure  $next

     * @return mixed

     */

    public function handle($request, Closure $next)

    {

        $user = Auth::user();

        if(empty($user)){

            return redirect()->route('get.login.page');

        }else
        {
            return redirect()->back();

        }

        return $next($request);

    }



}

