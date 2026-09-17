@extends('layouts.app')

@section('content')

    <div class="card">

        <h1 class="page-title">Book Detail</h1>

        <p class="page-description">
            Information about the selected book.
        </p>

        <h2>Book ID</h2>

        <p style="font-size: 32px; font-weight: bold;">
            {{ $id }}
        </p>

        @if($id)

            <p>
                You are viewing the detail page for book
                with ID {{ $id }}.
            </p>

        @endif

        <a href="/books" class="button">
            Back to Books
        </a>

    </div>

@endsection