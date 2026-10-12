@extends('layouts.app')

@section('content')

    <div class="card">

        <h1 class="page-title">Book Detail</h1>

        <p class="page-description">
            Information about the selected book.
        </p>

        <table>
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $book->id }}</td>
                </tr>

                <tr>
                    <th>Title</th>
                    <td>{{ $book->title }}</td>
                </tr>

                <tr>
                    <th>Author</th>
                    <td>{{ $book->author }}</td>
                </tr>

                <tr>
                    <th>Publication Year</th>
                    <td>{{ $book->year }}</td>
                </tr>

                <tr>
                    <th>Stock</th>
                    <td>{{ $book->stock }}</td>
                </tr>
            </tbody>
        </table>

        <br>

        <a href="{{ route('books.edit', $book) }}" class="button">
            Edit Book
        </a>

        <a href="{{ route('books.index') }}" class="button">
            Back to Books
        </a>

    </div>

@endsection