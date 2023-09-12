@extends('layout')

@section('content')
    <div class="row">
        <div class="d-flex align-items-center justify-content-center">
            <h1> Books: </h1>
        </div>

        <div class="col-9">
            @foreach($books as $book)
                <div class="card mb-1" >
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href='{{ url('books', '/' . $book->id) }}'>
                                {{ $book->book }}
                            </a>
                        </h5>
                        <div class="card-subtitle mb-2 text-muted">

                        </div>
                        <p class="card-text">
                            {{ $book->author }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
