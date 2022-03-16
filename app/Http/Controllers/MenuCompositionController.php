<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuCompositionController extends Controller
{
    public function menu_composition()
    {
        return view('menu_composition');
    }
}
