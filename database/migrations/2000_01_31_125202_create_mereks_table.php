<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * migrations bertujuan untuk memudah kan pengelolaan schema saat diubah dan mempermudah dalam pengembangan tim
     */
    public function up(): void
    {
        Schema::create('mereks', function (Blueprint $table) {
            $table->id();
            $table->string("name"); // field untuk menyimpan data name merek
            $table->string("icon")->nullable(); //nullable berguna agar dia memungkinkan untuk tidak di isi
            $table->string("slug"); //field untuk menymppan nama slug yang akan di generate otomatis
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mereks');
    }
};
