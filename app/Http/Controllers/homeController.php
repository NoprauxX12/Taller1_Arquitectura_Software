<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class homeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }
}
