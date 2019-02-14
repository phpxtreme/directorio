<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Language;
use App\Models\Prefix;
use Illuminate\Http\Request;

class CoreController extends Controller
{
    public function run(Request $request)
    {
        /** @var array $data */
        $data = [];

        $data['languages'] = Language::where([
            'active' => true
        ])
            ->take(4)
            ->orderBy('name', 'ASC')
            ->get();

        $data['countries'] = Country::where([
            'active' => true
        ])->take(5)
            ->orderBy('name', 'ASC')
            ->get(['flag', 'name', 'code']);

        $data['prefixes'] = Prefix::where([
            'active' => true
        ])->take(10)
            ->orderBy('name', 'ASC')
            ->get(['name', 'prefix']);

        return view('page.home', $data);
    }
}
