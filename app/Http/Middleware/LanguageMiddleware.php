<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1); // Get the first segment of the URL

        if (!in_array($locale, ['en', 'ar'])) {
            $locale = 'en'; // Default to English if not 'en' or 'ar'
        }

        App::setLocale($locale); // Set the application locale

        return $next($request);
    }
}
