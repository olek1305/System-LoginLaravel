<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $viewData = [];
        $viewData['title'] = "Home Page - About";
        return view('about.index')->with("viewData", $viewData);
    }
}
