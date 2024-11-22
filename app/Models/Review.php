<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'daftar_review';
    protected $fillable = ['isbn', 'komentar', 'rating', 'waktu_dibuat', 'waktu_diubah'];

    // Relasi ke Buku
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'isbn', 'isbn');
    }
}
