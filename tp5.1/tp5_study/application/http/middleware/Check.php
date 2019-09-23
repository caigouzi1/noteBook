<?php

namespace app\http\middleware;

use think\facade\Response;

class Check
{
    public function handle($request, \Closure $next)
    {
        if($request->method() == 'GET'){

//            return json(['message' => '请用Post方式访问']);
            //提前结束访问
//            return Response::create(['message' => '请用Post方式访问'], 'json', 200);

        }

        return $next($request);
    }
}
