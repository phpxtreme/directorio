<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Set session language
     *
     * @param Request $request
     * @param         $language
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function set(Request $request, $language)
    {
        if (Language::where(['flag' => $language, 'active' => true])->exists()) {
            Session::put(['language' => $language]);
        }

        return Redirect::back();
    }
}
