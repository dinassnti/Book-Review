<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'isbn';
    public $incrementing = false; // karena ISBN bukan auto-increment

    // Relasi many-to-many ke Penulis
    public function penulis()
    {
        return $this->belongsToMany(Penulis::class, 'penulis_buku', 'isbn', 'id_penulis');
    }

    // Relasi one-to-many ke Review
    public function review()
    {
        return $this->hasMany(Review::class, 'isbn', 'isbn');
    }
}
