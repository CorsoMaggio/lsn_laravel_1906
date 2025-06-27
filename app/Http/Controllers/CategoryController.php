<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'nullable',
        ]);

        Category::create([
            'category' => $request->category,
           
        ]);
        return redirect()
            ->route('categories.index')
            ->with('success', 'Categoria creata con successo!');
    }

    public function show(Category $category)
    {
        return view('categories.show', ['category' => $category]);
    }

    public function edit(Category $category)
    {
        return view('categories.update', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category' => 'nullable',

        ]);

        $category->update([
            'category' => $request->category,
         
        ]);
        return redirect()
            ->route('categories.index')
            ->with('success', 'Modificato con successo!');
    }

    public function destroy(Category $category)
    {
        
        $category->delete();
        return redirect()
            ->route('categories.index')
            ->with('success', 'Eliminato con successo!');
    }
}

