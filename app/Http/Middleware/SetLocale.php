<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Check if a locale is already set in session
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        } else {
            // Or use the browser's preferred language
            $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
            $locale = in_array($locale, ['en', 'ar']) ? $locale : 'en';
            App::setLocale($locale);
        }

        return $next($request);
    }
}
