<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (\Auth::check() && !is_null(\Auth::user()->lang)) {

            \App::setLocale(\Auth::user()->lang);
        } elseif (\Session::has('locale')) {

            \App::setLocale(\Session::get('locale'));
        } else {

            $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

            if ($locale === "en" || $locale === "fr") {

                \App::setLocale($locale);
            } else {

                \App::setLocale('fr');
            }
        }

        return $next($request);
    }
}
