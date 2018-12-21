<?php

namespace App\Http\Middleware;

use Closure;

class Mymiddleware
{
    /**
     * Обработать входящий запрос.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        echo $request->route('page');
        if($request->route('page') != 'pages'){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
