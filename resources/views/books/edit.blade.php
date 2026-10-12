@extends('layouts.app')

@section('content')

    <div class="card">

        <h1 class="page-title">Edit Book</h1>

        <p class="page-description">
            Update the information of this book.
        </p>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.update', $book) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="title">Title</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $book->title) }}"
                    required
                >
            </div>

            <div>
                <label for="author">Author</label>
                <input
                    type="text"
                    id="author"
                    name="author"
                    value="{{ old('author', $book->author) }}"
                    required
                >
            </div>

            <div>
                <label for="year">Publication Year</label>
                <input
                    type="number"
                    id="year"
                    name="year"
                    min="1"
                    max="9999"
                    value="{{ old('year', $book->year) }}"
                    required
                >
            </div>

            <div>
                <label for="stock">Stock</label>
                <input
                    type="number"
                    id="stock"
                    name="stock"
                    min="0"
                    value="{{ old('stock', $book->stock) }}"
                    required
                >
            </div>

            <button type="submit" class="button">
                Update Book
            </button>

            <a href="{{ route('books.index') }}" class="button">
                Cancel
            </a>
        </form>

    </div>

@endsection