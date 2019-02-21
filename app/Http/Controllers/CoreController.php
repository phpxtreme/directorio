<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CoreController extends Controller
{
    public function run(Request $request)
    {
        /** @var array $data */
        $data = [];

        // Countries
        $data['countries'] = Country::where([
            'active' => true
        ])->take(5)
            ->orderBy('code', 'ASC')
            ->get(['flag', 'name', 'code']);

        // Prefixes
        $countries = Country::with('prefixes')
            ->has('prefixes')->get()
            ->map(function ($country) {
                return $country->only('id');
            })->pluck('id');

        $data['prefixes'] = Country::with([
            'prefixes' => function ($query) {
                return $query->where(['active' => true])
                    ->orderBy('prefix', 'ASC');
            }
        ])->where(['active' => true])
            ->whereHas('prefixes', function ($query) use ($countries) {
                return $query->whereIn('country_id', $countries);
            })->get(['id', 'name', 'flag', 'code']);

        return View::make('page.home')->with($data);
    }
}
