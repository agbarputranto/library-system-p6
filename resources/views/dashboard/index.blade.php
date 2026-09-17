@extends('layouts.app')

@section('content')

    <h1 class="page-title">Dashboard</h1>

    <p class="page-description">
        Selamat datang di Library System.
        Kelola dan jelajahi koleksi perpustakaan dengan mudah.
    </p>

    <div class="stats">

        <div class="stat-card">
            <h3>Total Books</h3>
            <div class="stat-number">{{ $bookCount }}</div>
        </div>

        <div class="stat-card">
            <h3>Total Members</h3>
            <div class="stat-number">{{ $memberCount }}</div>
        </div>

        <div class="stat-card">
            <h3>Total Categories</h3>
            <div class="stat-number">{{ $categoryCount }}</div>
        </div>

    </div>

    @if($bookCount > 0)

        <div class="card" style="margin-top: 25px;">
            <h2>Library Collection</h2>

            <p>
                Koleksi buku tersedia dan siap untuk dijelajahi.
            </p>

            <a href="/books" class="button">
                View Books
            </a>
        </div>

    @endif

@endsection