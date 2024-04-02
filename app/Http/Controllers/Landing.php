<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landing extends BaseController
{
    public function index()
    {
        return view('landing.layout');
    }
}
