<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoreController extends Controller
{
    public function run(Request $request)
    {
        return view('page.home');
    }
}
