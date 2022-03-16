<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function auth()
    {
        return view('dashboard.auth');
    }

    public function calendar()
    {
        $active_sidebar = "calendar";
        return view('dashboard.calendar', compact("active_sidebar"));
    }

    public function dishes()
    {
        $active_sidebar = "dishes";
        return view('dashboard.dishes', compact("active_sidebar"));
    }
}
