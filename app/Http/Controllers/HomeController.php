<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($language = 'en')
    {
        if (in_array($language, ['en', 'ru', 'es'])) {
            app()->setLocale($language);
        }

        $v['pageurl'] = 'home';

        return view('home', $v);
    }
}
