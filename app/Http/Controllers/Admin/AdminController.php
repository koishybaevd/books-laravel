<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Author;
use App\Book;

class AdminController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        $books = Book::all();        

        return view('admin.index', compact('authors', 'books'));
    }
}
