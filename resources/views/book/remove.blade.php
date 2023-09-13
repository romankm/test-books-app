@extends('layout')

@section('content')
    <div class="row ">
        <h1>Are you sure you want to delete this book?</h1>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Publication year</th>
                <th scope="col">ISBN</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->publication_year }}</td>
                <td>{{ $book->isbn }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <form action="{{ route('books.destroy', ['book' => $book]) }}" method="POST" >
            @method('DELETE')
            @csrf
            <button class="btn btn-danger btn-lg mx-auto">Yes</button>
        </form>
    </div>
@endsection
