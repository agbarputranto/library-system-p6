@extends('layouts.app')

@section('content')

    <h1 class="page-title">Books</h1>

    <p class="page-description">
        Explore our collection of books.
    </p>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publication Year</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @foreach($books as $book)

                <tr>
                    <td>{{ $book['id'] }}</td>

                    <td>
                        <strong>{{ $book['title'] }}</strong>
                    </td>

                    <td>{{ $book['author'] }}</td>

                    <td>{{ $book['year'] }}</td>

                    <td>
                        <a
                            href="/books/{{ $book['id'] }}"
                            class="button"
                        >
                            View Detail
                        </a>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>

@endsection