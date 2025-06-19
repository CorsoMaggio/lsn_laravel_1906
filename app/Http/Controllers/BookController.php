<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('index', ['books' => $books]);
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pages' => ['required', 'integer'],
        ]);

        Book::create([
            'name' => $request->name,
            'years' => $request->years,
            'pages' => $request->pages,
        ]);
        return redirect()
            ->route('index')
            ->with('success', 'Complimenti! Libroi creato con successo!');
    }

    public function show(Book $book)
    {
        return view('show', ['book' => $book]);
    }
}