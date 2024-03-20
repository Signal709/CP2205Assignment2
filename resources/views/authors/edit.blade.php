@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Edit Book</div>
        <div class="card-bio">
            <form action="{{ route('authors.update', $author->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $author->name }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="bio">Bio:</label>
                    <textarea name="bio" id="bio" class="form-control @error('bio') is-invalid @enderror">{{ old('bio') ?? $author->bio }}</textarea>
                    @error('bio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- <div class="form-group">
                    <label for="author_id">Author</label>
                    <select name="author_id" id="author_id" class="form-control @error('author_id') is-invalid @enderror">
                        <option value="">Select an Author</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}"
                                {{ old('author_id', $author->author_id) == $author->id ? 'selected' : '' }}>
                                {{ $author->name }}</option>
                        @endforeach
                    </select>
                    @error('author_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> --}}

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('authors.show', $author->id) }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection
