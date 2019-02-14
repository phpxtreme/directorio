<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class CoreController extends Controller
{
    public function run(Request $request)
    {
        return view('page.home', [
            'languages' => Language::where([
                'active' => true
            ])->get()
        ]);
    }
}
