@extends('layouts.app')

@section('content')

    <h1 class="page-title">Members</h1>

    <p class="page-description">
        List of registered library members.
    </p>

    <div class="card">

        <ul>

            @foreach($members as $member)

                <li>
                    {{ $member }}
                </li>

            @endforeach

        </ul>

    </div>

@endsection