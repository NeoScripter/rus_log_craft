<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log; // <-- Import Log facade

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {

        if (!Session::has('locale')) {
            $preferredLocale = $this->getBrowserLocale();
            Session::put('locale', $preferredLocale);
        }

        App::setLocale(Session::get('locale'));

        return $next($request);
    }

    private function getBrowserLocale(): string
    {
        $availableLocales = ['ru', 'en', 'cn', 'jp'];
        $browserLocale = substr(request()->server('HTTP_ACCEPT_LANGUAGE') ?? '', 0, 2);

        return in_array($browserLocale, $availableLocales) ? $browserLocale : 'en';
    }
}
