@extends('layouts.app')

@section('content')

    <div class="card">

        <h1 class="page-title">Edit Book</h1>

        <p class="page-description">
            Update the information of this book.
        </p>

        {{-- Validation Errors --}}
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

            {{-- Title --}}
            <div>
                <label for="title">Title</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $book->title) }}"
                    required
                >

                @error('title')
                    <p style="color: red; margin-top: 5px;">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <br>

            {{-- Author --}}
            <div>
                <label for="author">Author</label>
                <input
                    type="text"
                    id="author"
                    name="author"
                    value="{{ old('author', $book->author) }}"
                    required
                >

                @error('author')
                    <p style="color: red; margin-top: 5px;">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <br>

            {{-- Publication Year --}}
            <div>
                <label for="year">Publication Year (1900–2026)</label>
                <input
                    type="number"
                    id="year"
                    name="year"
                    min="1900"
                    max="2026"
                    value="{{ old('year', $book->year) }}"
                    required
                >

                @error('year')
                    <p style="color: red; margin-top: 5px;">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <br>

            {{-- Stock --}}
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

                @error('stock')
                    <p style="color: red; margin-top: 5px;">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <br>

            {{-- Category --}}
            <div>
                <label for="category_id">Category</label>

                <select name="category_id" id="category_id" required>
                    <option value="">Pilih kategori</option>

                    @foreach ($categories as $category)
                        <option
                            value="{{ $category->id }}"
                            @selected(old('category_id', $book->category_id) == $category->id)
                        >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                @error('category_id')
                    <p style="color: red; margin-top: 5px;">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <br>

            {{-- Buttons --}}
            <button type="submit" class="button">
                Update Book
            </button>

            <a href="{{ route('books.index') }}" class="button">
                Cancel
            </a>
        </form>

    </div>

@endsection