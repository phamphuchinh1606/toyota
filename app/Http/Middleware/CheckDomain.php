<?php

namespace App\Http\Middleware;

use Closure;

class CheckDomain
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
//        $host = $request->headers->get('host');
//        $hostToyota = 'toyotaphulam.com';
//        $hostOto = 'otoquyen.com';
//        if($host == $hostToyota){
//            $url = $request->url();
//            $url = str_replace($hostToyota,$hostOto,$url);
//            return redirect()->to($url);
//        }
//        $url = $request->url();
//        if(str_contains($url,"http://")){
//            $url = str_replace("http://","https://",$url);
//            return redirect()->to($url);
//        }

        return $next($request);
    }
}
