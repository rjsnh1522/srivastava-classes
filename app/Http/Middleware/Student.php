<?php

namespace App\Http\Middleware;



use Closure;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;


class Student {



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

        }else if($user->user_type == 1)
        {

            return redirect('/login');

//            return redirect()->route('get.login.page');

        }
        else if($user->user_type == 2)
        {


            return redirect('/login');

//            return redirect()->route('get.login.page');

        }
        else if($user->user_type == 3)
        {


            return redirect('/login');

//            return redirect()->route('get.login.page');

        }

//        return '4';

        return $next($request);

    }



}

