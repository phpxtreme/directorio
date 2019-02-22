<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function countries()
    {
        return Country::where(['active' => true])
            ->orderBy('code', 'ASC')
            ->get(['flag', 'name', 'code']);
    }

    public function prefixes()
    {
        /** @var array $countries */
        $countries = Country::with('prefixes')
            ->has('prefixes')->get()
            ->map(function ($country) {
                return $country->only('id');
            })->pluck('id');

        return Country::with([
            'prefixes' => function ($query) {
                return $query->where(['active' => true])
                    ->orderBy('prefix', 'ASC');
            }
        ])->where(['active' => true])
            ->whereHas('prefixes', function ($query) use ($countries) {
                return $query->whereIn('country_id', $countries);
            })
            ->get(['id', 'name', 'flag', 'code']);
    }
}
