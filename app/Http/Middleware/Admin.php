<?php

namespace App\Http\Middleware;



use Closure;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;



class Admin {



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

            return redirect('/login');
//            return redirect()->route('get.login.page');

        }else if($user->user_type == 4 )
        {

            return redirect('/login');
//            return redirect()->route('get.login.page');

//            return redirect('login');

        }

        return $next($request);

    }



}

