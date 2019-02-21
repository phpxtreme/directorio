<?php

namespace App\Http\Middleware;

use App\Models\Language;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /** @var string $currentLanguage */
        $currentLanguage = Session::get('language');

        if (Language::where(['flag' => $currentLanguage, 'active' => true])->exists()) {

            /** @var string $language */
            $language = $currentLanguage;
        } else {

            /** @var string $language */
            $language = Config::get('app.locale');
        }

        App::setLocale($language);

        return $next($request);
    }
}
