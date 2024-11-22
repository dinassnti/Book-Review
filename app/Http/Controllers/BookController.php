<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Penulis;
use App\Models\PenulisBuku;
use App\Models\Review;

class BookController extends Controller
{
    // Menampilkan daftar buku beserta penulisnya
    public function index()
    {
        $books = Buku::with('penulis')->get();
        return view('books.index', compact('books'));
    }

    // Menampilkan detail buku beserta review
    public function show($isbn)
    {
        $book = Buku::with(['penulis', 'review'])->where('isbn', $isbn)->firstOrFail();
        return view('books.show', compact('book'));
    }
    
    // Menampilkan daftar judul buku yang ditulis oleh penulis
    public function booksByAuthor($authorId)
    {
        // Ambil penulis berdasarkan ID
        $penulis = Penulis::findOrFail($authorId);

        // Ambil semua buku yang ditulis oleh penulis tersebut
        $books = $penulis->buku;

        // Tampilkan daftar buku berdasarkan penulis
        return view('books.byAuthor', compact('penulis', 'books'));
    }

}