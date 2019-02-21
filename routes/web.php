<?php

use App\Http\Controllers\CountryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Unauthenticated

Route::view('/', 'page.home', [
    'prefixes'  => (new CountryController())->prefixes(),
    'countries' => (new CountryController())->countries(),
])->name('home');

Route::view('login', 'page.login')->name('login');
Route::view('about', 'page.about')->name('about');
Route::get('lang/{lang}', 'LanguageController@set')->name('setLanguage');

// Administration
