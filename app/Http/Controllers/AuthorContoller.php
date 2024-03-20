<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorContoller extends Controller
{
    // display a list of all authors
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    // display a form to create a new author
    public function create()
    {
        return view('authors.create');
    }

    // store new author to database
    public function Store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:25',
            'bio' => 'required'
        ]);

        $author = new Author;
        $author->name = $request->name;
        $author->bio = $request->bio;
        $author->save();
        return redirect()->route('authors.index')->with('success', 'Author has been created successfully.');
    }

    // display a specific author
    public function show($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.show', compact('author'));
    }

    // display the form to edit a specific author
    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.edit', compact('author'));
    }

    // update a specific author
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:25',
            'bio' => 'required'
        ]);

        $author = Author::findOrFail($id);
        $author->name = $request->name;
        $author->bio = $request->bio;
        $author->save();
        return redirect()->route('authors.index')->with('success', 'Author has been updated successfully.');
    }
}
