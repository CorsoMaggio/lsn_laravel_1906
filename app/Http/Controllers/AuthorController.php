<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller

{
    public function index()
    {
        $authors = Author::all();

        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'dob' => 'required'
        ]);

        Author::create([
            'name' => $request->name,
            'dob' => $request->dob,
        ]);
        return redirect()
            ->route('authors.index')
            ->with('success', 'Autore creato con successo!');
    }

    public function show(Author $author)
    {
        return view('authors.show', ['author' => $author]);
    }

    public function edit(Author $author)
    {
        return view('authors.update', ['author' => $author]);
    }

    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
        ]);

        $author->update([
            'name' => $request->name,
            'dob' => $request->dob,

        ]);
        return redirect()
            ->route('authors.index')
            ->with('success', 'Modificato con successo!');
    }

    public function destroy(Author $author)
    {
        //azione
        $author->delete();
        return redirect()
            ->route('authors.index')
            ->with('success', 'Eliminato con successo!');
    }
}
