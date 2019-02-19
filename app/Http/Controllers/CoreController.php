<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Language;
use App\Models\Prefix;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CoreController extends Controller
{
    public function run(Request $request)
    {
        /** @var array $data */
        $data = [];

        $data['languages'] = Language::where([
            'active' => true
        ])->take(4)
            ->orderBy('name', 'ASC')
            ->get(['flag', 'name']);

        $data['countries'] = Country::where([
            'active' => true
        ])->take(5)
            ->orderBy('code', 'ASC')
            ->get(['flag', 'name', 'code']);

        $data['prefixes'] = Prefix::with(['country'])
            ->where(['active' => true])
            ->take(10)
            ->orderBy('name', 'ASC')
            ->get(['name', 'prefix', 'country_id']);

        return View::make('page.home')->with($data);
    }
}
