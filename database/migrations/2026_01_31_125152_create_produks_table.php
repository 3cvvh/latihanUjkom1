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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->bigInteger("stock");
            $table->string("thumb");
            $table->text("about");
            $table->bigInteger("harga");
            $table->foreignId("kategori_id")->constrained("kategoris")->onDelete("cascade");
            $table->foreignId("merek_id")->constrained("mereks")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
