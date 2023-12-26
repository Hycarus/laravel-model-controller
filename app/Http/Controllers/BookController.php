<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $bookList = Book::all();
        return view('pages.books.index', compact('bookList'));
    }
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('pages.books.show', compact('book'));
    }
}
