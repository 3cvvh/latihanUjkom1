<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PromoCode extends Model
{
    protected $guarded = ["id"]; //memilih field apa saja yang tidak boleh di isi(berarti sisa nya boleh diisi)
    public function transaksi():HasMany
    {
        return $this->hasMany(Transaksi::class,"promo_code_id");
    }
}
