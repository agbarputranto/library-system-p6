@extends('layouts.app')

@section('content')

    <div class="books-header">
        <div class="books-heading">
            <h1 class="page-title">Books</h1>

            <p class="page-description">
                Explore our collection of books.
            </p>
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-button">
                Logout
            </button>
        </form>
    </div>

    {{-- Success message --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Add Book button --}}
    <div class="books-actions">
        <a href="{{ route('books.create') }}" class="button">
            Add Book
        </a>
    </div>

    {{-- Books table --}}
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publication Year</th>
                    <th>Stock</th>
                    <th>Category</th>
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
                            {{ $book->category?->name ?? 'Belum ada kategori' }}
                        </td>

                        <td class="action-buttons">
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
                        <td colspan="7" class="empty-message">
                            No books available.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <style>
        /* Header halaman buku */
        .books-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .books-heading {
            flex: 1;
        }

        .page-title {
            margin: 0 0 12px;
        }

        .page-description {
            margin: 0;
            color: #718078;
            font-size: 16px;
        }

        /* Tombol Logout */
        .logout-button {
            background-color: #0d5b3a;
            color: #ffffff;
            border: 1px solid #0d5b3a;
            padding: 11px 22px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            font-family: inherit;
            cursor: pointer;
            transition: background-color 0.2s ease,
                        transform 0.2s ease,
                        box-shadow 0.2s ease;
        }

        .logout-button:hover {
            background-color: #09482d;
            border-color: #09482d;
            box-shadow: 0 4px 10px rgba(13, 91, 58, 0.18);
            transform: translateY(-1px);
        }

        .logout-button:active {
            transform: translateY(0);
        }

        /* Area tombol Add Book */
        .books-actions {
            margin-bottom: 20px;
        }

        .books-actions .button {
            display: inline-block;
            text-decoration: none;
        }

        /* Tabel buku */
        .table-container {
            width: 100%;
            overflow-x: auto;
            border-radius: 12px;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-container th {
            background-color: #0d5b3a;
            color: #ffffff;
            text-align: left;
            padding: 16px;
            white-space: nowrap;
        }

        .table-container td {
            padding: 18px 16px;
            border-bottom: 1px solid #e3e9e5;
            background-color: #ffffff;
        }

        .table-container tbody tr:hover td {
            background-color: #f7faf8;
        }

        /* Tombol aksi */
        .action-buttons {
            white-space: nowrap;
        }

        .action-buttons form {
            display: inline;
        }

        .action-buttons .button {
            display: inline-block;
            margin: 2px;
            text-decoration: none;
            font-family: inherit;
            cursor: pointer;
        }

        .empty-message {
            text-align: center;
            color: #718078;
            padding: 30px !important;
        }

        /* Pesan berhasil */
        .alert-success {
            padding: 14px 18px;
            margin-bottom: 20px;
            border-radius: 8px;
            background-color: #e7f5ed;
            color: #0d5b3a;
            border: 1px solid #c7e8d4;
        }

        /* Tampilan mobile */
        @media (max-width: 600px) {
            .books-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .logout-button {
                padding: 10px 18px;
            }

            .table-container th,
            .table-container td {
                padding: 12px;
            }
        }
    </style>

@endsection