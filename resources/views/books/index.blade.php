@extends('layouts.app')

@section('content')

    <h1 class="page-title">Books</h1>

    <p class="page-description">
        Explore our collection of books.
    </p>

    {{-- Success message --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Add Book button --}}
    <p>
        <a href="{{ route('books.create') }}" class="button">
            Add Book
        </a>
    </p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publication Year</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>

                    <td>
                        <strong>{{ $book->title }}</strong>
                    </td>

                    <td>{{ $book->author }}</td>

                    <td>{{ $book->year }}</td>

                    <td>{{ $book->stock }}</td>

                    <td>
                        <a
                            href="{{ route('books.show', $book) }}"
                            class="button"
                        >
                            View Detail
                        </a>

                        <a
                            href="{{ route('books.edit', $book) }}"
                            class="button"
                        >
                            Edit
                        </a>

                        <form
                            action="{{ route('books.destroy', $book) }}"
                            method="POST"
                            style="display: inline;"
                            onsubmit="return confirm('Are you sure you want to delete this book?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="button">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">
                        No books available.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection