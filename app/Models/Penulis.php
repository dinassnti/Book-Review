<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    protected $table = 'penulis';

    // Relasi many-to-many ke Buku
    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'penulis_buku', 'id_penulis', 'isbn');
    }
}
