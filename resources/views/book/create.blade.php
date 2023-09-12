@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Create new</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('books.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input
                        name="title"
                        value="{{ old('title') ?? $book->title }}"
                        type="text" id="title"
                        class="form-control"
                        required
                    >
                    <div>{{ $errors->first('title') }}</div>
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Title:</label>
                    <input
                        name="author"
                        value="{{ old('author') ?? $book->author }}"
                        type="text" id="author"
                        class="form-control"
                        required
                    >
                    <div>{{ $errors->first('author') }}</div>
                </div>
                <div class="mb-3">
                    <label for="publication_year" class="form-label">Year:
                        <input name="publication_year" type="number" min="1900" max="2099" step="1"
                               value="{{ old('publication_year') ?? $book->publication_year }}"
                        />
                    </label>
                    <div>{{ $errors->first('publication_year') }}</div>
                </div>
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN:</label>
                    <input
                        name="isbn"
                        value="{{ old('isbn') ?? $book->isbn }}"
                        type="text" id="isbn"
                        class="form-control"
                        required
                    >
                    <div>{{ $errors->first('isbn') }}</div>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
