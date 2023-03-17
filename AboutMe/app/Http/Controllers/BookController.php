<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book()
    {
        $viewData = [];
        $viewData['title'] = "Home Page - Book";
        return view('book.index')->with("viewData", $viewData);
    }
}
