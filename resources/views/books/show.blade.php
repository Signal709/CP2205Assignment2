@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header"><h6>Title:</h6> {{ $book->title }}</div>
        <div class="card-body">
            <h6>Description:</h6>
            <p>{{ $book->description }}</p>
            <p><h6>Author:</h6> {{ $book->author->name }}</p>
            <p>Created at: {{ $book->created_at->format('Y-m-d H:i:s') }}</p>
            <p>Updated at: {{ $book->updated_at->format('Y-m-d H:i:s') }}</p>
            <div class="card-footer">
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
                {{-- <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> --}}
            </div>
            
        </div>
    </div>
@endsection
