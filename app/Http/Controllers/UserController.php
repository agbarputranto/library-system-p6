<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Mengambil seluruh data pengguna dari database
        $users = User::orderBy('name')->get();

        // Mengirim data pengguna ke halaman users.index
        return view('users.index', compact('users'));
    }
}