<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('book/index', compact('books'));
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('book/edit', compact('book'));
    }
}
