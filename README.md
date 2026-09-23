# Library System - Pertemuan 6

Library System merupakan project Laravel yang dibuat untuk memenuhi tugas praktikum Pertemuan 6 pada mata kuliah Pemrograman Web.

Project ini berfokus pada implementasi **Routing, Controller, Blade View, dan Blade Layout** menggunakan Laravel 13. Pada tahap ini, data buku, kategori, dan member masih menggunakan data dummy berupa array dan belum menggunakan database.

## Teknologi yang Digunakan

- Laravel 13
- PHP
- Blade Template Engine
- HTML
- CSS
- Git & GitHub

## Fitur

Project ini memiliki beberapa halaman utama:

### Dashboard

URL:

`/dashboard`

Menampilkan:

- Judul aplikasi
- Deskripsi aplikasi
- Jumlah buku
- Jumlah member
- Jumlah kategori

### Books

URL:

`/books`

Menampilkan daftar buku yang terdiri dari:

- Ronggeng Dukuh Paruk
- Teka-teki Rumah Aneh
- Sang Alkemis
- Start With Why
- Harry Potter

Setiap data buku memiliki informasi:

- ID
- Judul
- Penulis
- Tahun terbit

### Book Detail

URL:

`/books/{id}`

Digunakan untuk menampilkan detail berdasarkan parameter ID pada URL.

Contoh:

`/books/10`

akan menampilkan ID buku:

`10`

### Categories

URL:

`/categories`

Menampilkan berbagai kategori buku seperti:

- Fiksi
- Non-Fiksi
- Romansa
- Misteri
- Thriller
- Horor
- Fantasi
- Petualangan
- Fiksi Ilmiah
- Sejarah
- Biografi
- Autobiografi
- Pendidikan
- Teknologi
- Bisnis
- Ekonomi
- Psikologi
- Filsafat
- Agama
- Politik
- Hukum
- Seni
- Musik
- Kesehatan
- Self-Improvement
- Motivasi
- Anak-anak
- Remaja
- Komik
- Puisi

### Members

URL:

`/members`

Menampilkan daftar member yang terdaftar pada sistem.

## Konsep MVC

Project ini menerapkan alur sederhana:

```text
Browser
   ↓
Request
   ↓
Route
   ↓
Controller
   ↓
Blade View
   ↓
Response
   ↓
Browser
