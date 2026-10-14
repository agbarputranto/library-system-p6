@extends('layouts.app')

@section('content')

    <div class="card">

        <h1 class="page-title">Add Book</h1>

        <p class="page-description">
            Add a new book to the collection.
        </p>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- General Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Please correct the following errors:</strong>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            {{-- Title --}}
            <div>
                <label for="title">Title</label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title') }}"
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
                    value="{{ old('author') }}"
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
                    type="text"
                    id="year"
                    name="year"
                    value="{{ old('year') }}"
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
                    type="text"
                    id="stock"
                    name="stock"
                    value="{{ old('stock') }}"
                >

                @error('stock')
                    <p style="color: red; margin-top: 5px;">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <br>

            {{-- Buttons --}}
            <button type="submit" class="button">
                Save Book
            </button>

            <a href="{{ route('books.index') }}" class="button">
                Cancel
            </a>

        </form>

    </div>

@endsection