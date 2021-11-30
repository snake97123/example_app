<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
      $books = Book::all();
      return view("books.index", compact("books"));
    }

    function show(Book $book)
    {
      return view("books.show", compact("book"));
    }
}
