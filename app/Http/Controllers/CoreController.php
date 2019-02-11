<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class CoreController extends Controller
{
    public function run(Request $request)
    {
        /** @var array $data */
        $data = [];

        /** @var Language $languages */
        $data['languages'] = Language::where([
            'active' => true
        ])->get();

        return view('page.home', $data);
    }
}
