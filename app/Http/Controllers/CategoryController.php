<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            'Fiksi',
            'Non-Fiksi',
            'Romansa',
            'Misteri',
            'Thriller',
            'Horor',
            'Fantasi',
            'Petualangan',
            'Fiksi Ilmiah',
            'Sejarah',
            'Biografi',
            'Autobiografi',
            'Pendidikan',
            'Teknologi',
            'Bisnis',
            'Ekonomi',
            'Psikologi',
            'Filsafat',
            'Agama',
            'Politik',
            'Hukum',
            'Seni',
            'Musik',
            'Kesehatan',
            'Self-Improvement',
            'Motivasi',
            'Anak-anak',
            'Remaja',
            'Komik',
            'Puisi'
        ];

        return view('categories.index', compact('categories'));
    }
}