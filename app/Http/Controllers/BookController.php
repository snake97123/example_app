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

    public function create()
    {
      return view("books.create");
    }

    public function store(Request $request)
    {
      $book = new Book();
      $book->inout = $request->input("inout");
      $book->year = $request->input("year");
      $book->month = $request->input("month");
      $book->category = $request->input("category");
      $book->amount = $request->input("amount");
      $book->save();

      return redirect()->route("books.show", $book);
    }
    public function edit(Book $book)
    {
      return view("books.edit", compact("book"));
    }
}

