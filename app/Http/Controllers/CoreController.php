<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CoreController extends Controller
{
    public function run(Request $request)
    {
        /** @var array $data */
        $data = [];

        // Languages
        $data['languages'] = Language::where([
            'active' => true
        ])->take(4)
            ->orderBy('name', 'ASC')
            ->get(['flag', 'name']);

        // Countries
        $data['countries'] = Country::where([
            'active' => true
        ])->take(5)
            ->orderBy('code', 'ASC')
            ->get(['flag', 'name', 'code']);

        // Prefixes
        $countries = [1, 2, 3];

        $data['prefixes'] = Country::with([
            'prefixes' => function ($query) {
                return $query->orderBy('prefix', 'ASC');
            }
        ])->whereHas('prefixes', function ($query) use ($countries) {
            return $query->whereIn('country_id', $countries);
        })->take(20)
            ->get(['id', 'name', 'flag', 'code']);

        return View::make('page.home')->with($data);
    }
}
