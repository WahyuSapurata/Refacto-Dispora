<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landing extends BaseController
{
    public function home()
    {
        $module = 'Home';
        return view('landing.home', compact('module'));
    }
}
