<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;


class BookController extends Controller

{

  public function welcome()
  {
    $books = Book::all();
    $authors = Author::all();
    $categories = Category::all();
    return view('welcome', compact('books', 'authors', 'categories'));
  }

  public function index()
  {
    $books = Book::all();
    return view('index', compact('books'));
  }

  public function create()
  {
    $authors = Author::all();
    return view('create', compact('authors'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'years' => 'integer',
      'pages' => ['required', 'integer'],
      'author_id' => 'required',
      'category' => 'nullable'
    ]);

    Book::create([
      'name' => $request->name,
      'years' => $request->years,
      'pages' => $request->pages,
      'author_id' => $request->author_id,
      'category_id' => $request->category,
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
    $books = Book::all();
    $authors = Author::all();
    $categories = Category::all();
    return view('edit', compact('book', 'authors', 'category'));
  }

  public function update(Request $request, Book $book, Author $author, Category $category)
  {
    $request->validate([
      'name' => 'required',
      'years' => 'integer',
      'pages' => ['required', 'integer'],
      'author_id' => 'required',
      'category' => 'nullable',
    ]);

    $book->update([
      'name' => $request->name,
      'years' => $request->years,
      'pages' => $request->pages,
      'author_id' => $request->author_id,
      'category_id' => $request->category,
    ]);

    $author->update([
      'name' => $request->name,
      'dob' => $request->dob,
    ]);
    $category->update([
      'category' => $request->category,
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
