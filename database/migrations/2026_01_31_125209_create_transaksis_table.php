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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->bigInteger("jumlah");
            $table->text("alamat");
            $table->string("trxId");
            $table->string("proof")->nullable();
            $table->string("size");
            $table->bigInteger("subTotal_amount");
            $table->bigInteger("grandTotal_amount");
            $table->boolean("isPaid")->default(false);
            $table->foreignId("shoe_id")->constrained("produks")->onDelete("cascade");
            $table->foreignId("promo_code_id")->nullable()->constrained("promo_codes")->onDelete("cascade"); //kalo tidak diisi tidak apa apa karna ada nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
