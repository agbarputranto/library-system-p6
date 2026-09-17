<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Akbar Tri Putranto',
            'Valenly Yabes Pakpahan',
            'Dhafi Putra Alfarezi',
            'Abdurrahman Fadly',
            'Annisa Balqis Kusuma Putri'
        ];

        return view('members.index', compact('members'));
    }
}