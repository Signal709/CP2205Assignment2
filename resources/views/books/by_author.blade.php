@extends('layouts.app')

@section('content')
    <div class="m-4">
        <h1>Book Library</h1>
        <h3>Books</h3>
        <div>
            <a href="{{ route('welcome') }}" class="btn btn-secondary">Home</a>
            <a href="{{ route('books.create') }}" class="btn btn-secondary">Add Book</a>
        </div>

    </div>
    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ $book->title }}</div>
                    <div class="card-body">
                        <p>Author: <a href="#">{{ $book->author->name }}</a></p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">View</a>
                        {{-- <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

{{-- {{ route('/authors/{author}/books') }} --}}