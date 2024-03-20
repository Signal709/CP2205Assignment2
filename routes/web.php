<?php

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorContoller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// change this to be a home page route to access everything
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// ---- Book Routes ----

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');

// ---- Author Routes ----

Route::get('/authors', [AuthorContoller::class, 'index'])->name('authors.index');
Route::get('/authors/create', [AuthorContoller::class, 'create'])->name('authors.create');
Route::post('/authors', [AuthorContoller::class, 'store'])->name('authors.store');
Route::get('/authors/{id}', [AuthorContoller::class, 'show'])->name('authors.show');
Route::get('/authors/{id}/edit', [AuthorContoller::class, 'edit'])->name('auhtors.edit');
Route::put('/authors/{id}', [AuthorContoller::class, 'update'])->name('authors.update');

// ---- Old Book Routes ----

// Display a list of all books
// Route::get('/books', function () {
//     $books = Book::all();
//     return view('books.index', compact('books'));
// })->name('books.index');

// Display a form to create a new book
// Route::get('/books/create', function () {
//     $authors = Author::all();
//     return view('books.create', compact('authors'));
// })->name('books.create');

// Store new book to database
// Route::post('/books', function (Request $request) {
//     $validatedData = $request->validate([
//         'title' => 'required|max:75',
//         'description' => 'required',
//         'author_id' => 'required'
//     ]);
//     $book = new Book;
//     $book->title = $request->title;
//     $book->description = $request->description;
//     $book->author_id = $request->author_id;
//     $book->save();
//     return redirect('/books')->with('success', 'Book has been created successfully.');
// })->name('books.store');

// Display a specific book
// Route::get('/books/{id}', function ($id) {
//     $book = Book::find($id);
//     // $authors = Author::all();
//     return view('books.show', compact('book'));
// })->name('books.show');

// Display a form to edit a specific book
// Route::get('/books/{id}/edit', function ($id) {
//     $book = Book::find($id);
//     $authors = Author::all();
//     return view('books.edit', compact('book', 'authors'));
// })->name('books.edit');

// Update a specific book
// Route::put('/books/{id}', function (Request $request, $id) {
//     $validatedData = $request->validate([
//         'title' => 'required|max:75',
//         'description' => 'required',
//         'author_id' => 'required'
//     ]);

//     $book = Book::find($id);
//     $book->title = $request->title;
//     $book->description = $request->description;
//     $book->author_id = $request->author_id;
//     $book->save();
//     return redirect('/books')->with('success', 'Book has been updated successfully.');
// })->name('books.update');

// ---- Old Author Routes ----

// display a list of all authors
// Route::get('/authors', function () {
//     $authors = Author::all();
//     return view('authors.index', compact('authors'));
// })->name('authors.index');

// Display a form to create a new author
// Route::get('/authors/create', function () {
//     return view('authors.create');
// })->name('authors.create');

// Store new author to database
// Route::post('/authors', function (Request $request) {
//     $validatedData = $request->validate([
//         'name' => 'required|max:25',
//         'bio' => 'required'
//     ]);
//     $author = new Author;
//     $author->name = $request->name;
//     $author->bio = $request->bio;
//     $author->save();
//     return redirect('/authors')->with('success', 'Author has been created successfully.');
// })->name('authors.store');

// Display a specific author
// Route::get('/authors/{id}', function ($id) {
//     $author = Author::find($id);
//     return view('authors.show', compact('author'));
// })->name('authors.show');

// Display a form to edit a specific author
// Route::get('/authors/{id}/edit', function ($id) {
//     // code to retrieve and display the edit post form
//     $author = Author::find($id);
//     // $authors = Author::all();
//     return view('authors.edit', compact('author'));
// })->name('authors.edit');

// Update a specific author
// Route::put('/authors/{id}', function (Request $request, $id) {
//     $validatedData = $request->validate([
//         'name' => 'required|max:25',
//         'bio' => 'required',
//     ]);

//     $author = Author::find($id);
//     $author->name = $request->name;
//     $author->bio = $request->bio;
//     $author->save();
//     return redirect('/authors')->with('success', 'Author has been updated successfully.');
// })->name('authors.update');

// display a list of books written by selected author
// Route::get('/authors/{author}', function ($id) {
//     $author = Author::findOrFail($id);
//     return view('authors.show', compact('author'));
// })->name('authors.show');
