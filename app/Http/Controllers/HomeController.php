<?php

namespace App\Http\Controllers;

use App\Models\Site;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'sites' => Site::get(),
        ]);
    }
}
