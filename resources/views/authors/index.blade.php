@extends('layouts.app')

@section('content')
    <div class="m-4">
        <h1>Book Library</h1>
        <h3>Authors</h3>
        <div>
            <a href="{{ route('welcome') }}" class="btn btn-secondary">Home</a>
            <a href="{{ route('authors.create') }}" class="btn btn-secondary">Add Author</a>
        </div>
    </div>
    <div class="row">
        @foreach ($authors as $author)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><h6>Name:</h6> {{ $author->name }}</div>
                    <div class="card-body">
                        {{-- <h5>Bio:</h5>
                        <p>{{ $author->bio }}</p> --}}
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('authors.show', $author->id) }}" class="btn btn-primary">View</a>
                        {{-- <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Edit</a> --}}
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