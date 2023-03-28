<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData['title'] = "Home Page - book";
        $viewData['subtitle'] = "List of books";
        #below Book is from App\Models
        $viewData['books'] = Book::all();
        return view('book.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        #below Book is from App\Models
        $book = Book::findOrFail($id);
        $viewData['title'] = $book['name'];
        $viewData['author'] = $book['name']."- Author";
        return view('product.show')->with("viewData",$viewData);
    }


}
