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
                @include('book.form-fields')
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
