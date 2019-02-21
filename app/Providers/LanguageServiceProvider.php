<?php

namespace App\Providers;

use App\Models\Language;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class LanguageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /** @var array $languages */
        $languages = Language::where([
            'active' => true
        ])->orderBy('name', 'ASC')->get(['flag', 'name']);

        View::share('languages', $languages);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
