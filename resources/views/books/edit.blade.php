@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Edit Book</div>
        <div class="card-description">
            <form action="{{ route('books.update', $book->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title"
                        class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title') ?? $book->title }}">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') ?? $book->description }}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="author_id">Author</label>
                    <select name="author_id" id="author_id" class="form-control @error('author_id') is-invalid @enderror">
                        <option value="">Select an Author</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}"
                                {{ old('author_id', $book->author_id) == $author->id ? 'selected' : '' }}>
                                {{ $author->name }}</option>
                        @endforeach
                    </select>
                    @error('author_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('books.show', $book->id) }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection
