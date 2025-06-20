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
      'years' => 'integer',
      'pages' => ['required', 'integer'],
    ]);

    Book::create([
      'name' => $request->name,
      'years' => $request->years,
      'pages' => $request->pages,
    ]);
    return redirect()
      ->route('index')
      ->with('success', 'Libro creato con successo!');
  }

  public function show(Book $book)
  {
    return view('show', ['book' => $book]);
  }

  public function edit(Book $book)
  {
    return view('edit', ['book' => $book]);
  }

  public function update(Request $request, Book $book)
  {
    $request->validate([
      'name' => 'required',
      'years' => 'integer',
      'pages' => ['required', 'integer'],
    ]);

    $book->update([
      'name' => $request->name,
      'years' => $request->years,
      'pages' => $request->pages,
    ]);
    return redirect()
      ->route('index')
      ->with('success', 'Modificato con successo!');
  }

  public function destroy(Book $book)
  {
    //azione
    $book->delete();
    return redirect()
      ->route('index')
      ->with('success', 'Eliminato con successo!');
  }
}
