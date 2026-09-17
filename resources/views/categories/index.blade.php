@extends('layouts.app')

@section('content')

    <h1 class="page-title">Categories</h1>

    <p class="page-description">
        Browse books based on their categories.
    </p>

    <div class="card">

        <ul>

            @foreach($categories as $category)

                <li>
                    {{ $category }}
                </li>

            @endforeach

        </ul>

    </div>

@endsection