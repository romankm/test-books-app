@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('books.update', ['book' => $book])}}">
                @csrf
                @method('PUT')
                @include('book.form-fields')
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
