<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            [
                'id' => 1,
                'title' => 'Ronggeng Dukuh Paruk',
                'author' => 'Ahmad Tohari',
                'year' => 1982
            ],
            [
                'id' => 2,
                'title' => 'Teka-teki Rumah Aneh',
                'author' => 'Shari Lapena',
                'year' => 2017
            ],
            [
                'id' => 3,
                'title' => 'Sang Alkemis',
                'author' => 'Paulo Coelho',
                'year' => 1988
            ],
            [
                'id' => 4,
                'title' => 'Start With Why',
                'author' => 'Simon Sinek',
                'year' => 2009
            ],
            [
                'id' => 5,
                'title' => 'Harry Potter',
                'author' => 'J.K. Rowling',
                'year' => 1997
            ],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}