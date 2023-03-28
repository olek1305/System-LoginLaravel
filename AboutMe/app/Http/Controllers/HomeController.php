<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - AboutMe";

        return view('home.index')->with("viewData", $viewData);
    }
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - AboutMe";
        $viewData["subtitle"] =  "About us";
        $viewData["description"] =  "This is a page about me";
        $viewData["author"] = "Developed by: Arcylisz";
        
        return view('about.index')->with("viewData", $viewData);
    }
}
