<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// migration berguna untuk menyimpan schema dari table
// agar bisa dipake terus berulang ulang

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    { //schema dari table kategori
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string("name"); //field untuk nama kategori
            $table->string("gambar")->nullable(); //field untuk menyimpan path dari gambar kategori
            $table->string("slug"); //field untuk menyimpan slug yang akan di generate otomatis
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoris'); //ketika rollback maka akan menjalankan method ini
    }
};
