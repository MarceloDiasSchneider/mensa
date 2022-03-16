<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuCompositionController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function links()
    {
        return view('links');
    }

    public function menu_composition()
    {
        return view('menu_composition');
    }
}
