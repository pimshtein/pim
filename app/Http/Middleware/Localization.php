<?php

namespace App\Http\Middleware;

use App\Helpers\Locale;
use Closure;
use Illuminate\Support\Facades\App;

class Localization
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
        $prefix = Locale::getPrefix();
        if ($prefix) {
            App::setLocale($prefix);
        }
        return $next($request);
    }
}
