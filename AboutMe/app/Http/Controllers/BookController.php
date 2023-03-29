<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - book";
        #below Book is from App\Models
        $viewData["books"] = Book::all();
        return view('book.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        #below Book is from App\Models
        $book = Book::findOrFail($id);
        $viewData["title"] = $book["name"];
        $viewData["book"] = $book;
        return view('book.show')->with("viewData",$viewData);
    }


}
