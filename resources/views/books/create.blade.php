@extends('layouts.app')

@section('content')

    <div class="card">

        <h1 class="page-title">Add Book</h1>

        <p class="page-description">
            Add a new book to the collection.
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

        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <div>
                <label for="title">Title</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title') }}"
                    required
                >
            </div>

            <div>
                <label for="author">Author</label>
                <input
                    type="text"
                    id="author"
                    name="author"
                    value="{{ old('author') }}"
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
                    value="{{ old('year') }}"
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
                    value="{{ old('stock') }}"
                    required
                >
            </div>

            <button type="submit" class="button">
                Save Book
            </button>

            <a href="{{ route('books.index') }}" class="button">
                Cancel
            </a>
        </form>

    </div>

@endsection