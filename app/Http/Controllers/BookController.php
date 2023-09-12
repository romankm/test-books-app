<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $books = Book::paginate(10);

        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $book = new Book;

        return view('book.create', compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request): View|RedirectResponse
    {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'publication_year' => $request->publication_year,
            'isbn' => $request->isbn,
        ]);

        return redirect()->route('books.index')->with('status', 'Book Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book): View
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): View
    {
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Book $book): RedirectResponse
    {
        return redirect()->route('books.index')->with('status', 'Book Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function remove(Book $book): View
    {
        return view('book.remove', compact('book'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book): RedirectResponse
    {
        $book->delete();

        return redirect()->route('books.index')->with('status', 'Book Deleted Successfully');
    }
}
