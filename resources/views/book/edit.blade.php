@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{ route('books.edit', ['book' => $book])}}">{{ route('books.edit', ['book' => $book])}}</a>
            <form method="POST" action="{{ route('books.edit', ['book' => $book])}}">
                @csrf
                @method('PATCH')

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
