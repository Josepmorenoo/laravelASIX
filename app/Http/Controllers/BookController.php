<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); // Això carrega tots els camps de la taula `books`
        return view('books.index', compact('books'));
    }



    public function create(): View {
        return view('books.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'releaseYear' => 'required',
            'genre' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index');
    }


    public function edit(Book $book): View {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book): RedirectResponse
    {
        // Validació dels camps
        $validated = $request->validate([
            'name' => 'required',  // 'name' per la columna 'title' a la taula
            'author' => 'required',
            'published_year' => 'required|integer',  // Utilitzem 'published_year' aquí
            'genre' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
        ]);

        // Actualitzant només els camps que han estat validades
        $book->update([
            'title' => $validated['name'],  // Si utilitzes 'title' per el nom del llibre
            'author' => $validated['author'],
            'published_year' => $validated['published_year'],  // Canviat a 'published_year'
            'genre' => $validated['genere'],
            'price' => $validated['preu'],
        ]);

        // Redirigint cap a la llista de llibres amb un missatge de confirmació
        return redirect()->route('books.index')->with('success', 'Book updated successfully!');
    }



    public function delete(Book $book): View {
        return view('books.delete', compact('book'));
    }

    public function destroy(Book $book): RedirectResponse {
        $book->delete();
        return redirect()->route('books.index');
    }

    public function show(Book $book): View {
        return view('books.show', compact('book'));
    }
}

