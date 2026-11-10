@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Users</h1>

    <p>Manage library system users.</p>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->role) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection