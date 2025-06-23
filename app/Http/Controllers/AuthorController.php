<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller

{
    public function indexauthor()
    {
        $authors = Author::all();
        return view('indexauthor');
    }

    public function createauthor()
    {
        return view('addauthor');
    }

    public function storeauthor(Request $request)
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
            ->route('indexauthor')
            ->with('success', 'Autore creato con successo!');
    }

    public function showauthor(Author $author)
    {
        return view('showauthor', ['author' => $author]);
    }

    public function editauthor(Author $author)
    {
        return view('editauthor', ['author' => $author]);
    }

    public function updateauthor(Request $request, Author $author)
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
            ->route('indexauthor')
            ->with('success', 'Modificato con successo!');
    }

    public function destroyauthor(Author $author)
    {
        //azione
        $author->delete();
        return redirect()
            ->route('indexauthor')
            ->with('success', 'Eliminato con successo!');
    }
}
