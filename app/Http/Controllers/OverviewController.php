<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function show()
    {
        return view('overviews.work');
    }

    public function look()
    {
        return view('overviews.look');
    }
}
