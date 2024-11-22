<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penulis_buku', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penulis');
            $table->char('isbn', 13);
    
            $table->foreign('id_penulis')->references('id')->on('penulis')->onDelete('cascade');
            $table->foreign('isbn')->references('isbn')->on('buku')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penulis_buku');
    }
};
