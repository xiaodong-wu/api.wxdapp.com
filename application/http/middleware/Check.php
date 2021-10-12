<?php

namespace app\http\middleware;


class Check
{
    public function handle($request, \Closure $next)
    {
        if ($request->param('name')=='think'){
            return redirect('/think');
        }

        return $next($request);
    }
}
