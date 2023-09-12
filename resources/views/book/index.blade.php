@extends('layout')

@section('content')
    <div class="row">
        <div class="col-9">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Author</th>
                    <th scope="col">Title</th>
                    <th scope="col">Publication year</th>
                    <th scope="col">ISBN</th>
                    <th scope="col" colspan="2">Actions</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @forelse($books as $book)
                    <tr>
                        <th scope="row"><a href="{{ route('books.show', ['book' =>  $book]) }}">{{ $book->id }} </a></th>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->publication_year }}</td>
                        <td>{{ $book->isbn }}</td>
{{--                        <td>--}}
{{--                            <a href="{{ route('books.edit', ['book' => $book]) }}" class="link-primary">Edit</a>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="{{ route('books.destroy', ['book' => $book]) }}" class="link-danger">Delete</a>--}}
{{--                        </td>--}}
                        <td>
                            <div class="row list-inline-item">
                                <div class="col-4">
                                    <a href="{{ route('books.edit', ['book' => $book]) }}" class="link-primary">Edit</a>
                                </div>
                                <div class="col-4 m-6">
                                    <a href="{{ route('books.remove', ['book' => $book]) }}" class="link-primary">Delete</a>
                                </div>
{{--                                <div class="col-4">--}}
{{--                                    <form action="/books/{{ $book->id }}" method="POST" >--}}
{{--                                        @method('DELETE')--}}
{{--                                        @csrf--}}
{{--                                        <button class="btn btn-danger text-nowrap">Delete</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
                            </div>
                        </td>
                    </tr>
                @empty
                    no books yet
                @endforelse
                </tbody>
            </table>

            {{ $books->links() }}
        </div>
    </div>
@endsection
