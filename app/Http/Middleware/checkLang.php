<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App;

class checkLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $langs = config("app.supportedLocales");

        $parameters = $request->route()->parameters();

        $locale = $parameters['locale'];

        if($locale && in_array($locale , $langs)){
            App::setLocale($locale);

        }else{
            return redirect(App::getLocale());

        }


        return $next($request);
    }
}
