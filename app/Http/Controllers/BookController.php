<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BookController extends Controller
{
    // Menampilkan daftar buku
    public function index()
    {
        Gate::authorize('viewAny', Book::class);

        $books = Book::with('category')->get();

        return view('books.index', compact('books'));
    }

    // Menampilkan form tambah buku
    public function create()
    {
        Gate::authorize('create', Book::class);

        $categories = Category::orderBy('name')->get();

        return view('books.create', compact('categories'));
    }

    // Menyimpan buku baru
    public function store(Request $request)
    {
        Gate::authorize('create', Book::class);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:2026',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        Book::create($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    // Menampilkan detail buku
    public function show(Book $book)
    {
        Gate::authorize('view', $book);

        return view('books.show', compact('book'));
    }

    // Menampilkan form edit buku
    public function edit(Book $book)
    {
        Gate::authorize('update', $book);

        $categories = Category::orderBy('name')->get();

        return view('books.edit', compact('book', 'categories'));
    }

    // Menyimpan perubahan buku
    public function update(Request $request, Book $book)
    {
        Gate::authorize('update', $book);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:2026',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book->update($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    // Menghapus buku
    public function destroy(Book $book)
    {
        Gate::authorize('delete', $book);

        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}