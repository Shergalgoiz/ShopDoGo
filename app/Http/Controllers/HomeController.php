<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Homeidx() {
        return view('pages.home_content');
    }
}
