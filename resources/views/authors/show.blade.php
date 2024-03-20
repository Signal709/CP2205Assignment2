@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h6>Name:</h6> {{ $author->name }}
        </div>
        <div class="card-body">
            <h5>Bio:</h5>
            <p>{{ $author->bio }}</p>
            {{-- <p>Author: {{ $author->author->name }}</p> --}}
            <h5>Books by {{ $author->name }}</h5>
            <ul>
                @foreach ($author->books as $book)
                    <li>
                        <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
                    </li>
                @endforeach
            </ul>
            <p>Created at: {{ $author->created_at->format('Y-m-d H:i:s') }}</p>
            <p>Updated at: {{ $author->updated_at->format('Y-m-d H:i:s') }}</p>
            <div class="card-footer">
                <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back</a>
                {{-- <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> --}}
            </div>

        </div>
    </div>
@endsection
