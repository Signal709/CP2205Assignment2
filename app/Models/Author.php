<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Controller;

class Author extends Model
{
    use HasFactory;

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}

// class BookController extends Controller
// {
//     public function booksByAuthor(Author $author)
//     {
//         $books = $author->books;
//         return view('books.by_author', compact('author', 'books'));
//     }
// }
