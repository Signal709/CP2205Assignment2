<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // display a list of books
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // display a form to create a new book
    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    // store new book to database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:75',
            'description' => 'required',
            'author_id' => 'required'
        ]);
        
        $book = new Book;
        $book->title = $request->title;
        $book->description = $request->description;
        $book->author_id = $request->author_id;
        $book->save();
        return redirect()->route('books.index')->with('success', 'Book has been created successfully.');
    }

    // display a specific book
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    // display a form to edit a specific book
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $authors = Author::all();
        return view('books.edit', compact('book', 'authors'));
    }

    // Update a specific book
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:75',
            'description' => 'required',
            'author_id' => 'required'
        ]);

        $book = Book::findOrFail($id);
        $book->title = $request->title;
        $book->description = $request->description;
        $book->author_id = $request->author_id;
        $book->save();
        return redirect()->route('books.index')->with('success', 'Book has been updated successfully.');
    }
}
