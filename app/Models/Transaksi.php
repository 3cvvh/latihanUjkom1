<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    protected $guarded = ["id"]; //memilih field apa saja yang tidak boleh di isi(berarti sisa nya boleh diisi)
    //mutator yang berfungsi mengenerate trx saat record akan ditambahkan
    public function setNameAttribute($value):void
    {
        $this->attributes["trxId"] =  $value . time();
        $this->attributes["name"] = $value;
    }
    public function shoe():BelongsTo
    {
        return $this->belongsTo(Produk::class,"shoe_id");
    }
    public function promo_code():BelongsTo
    {
        return $this->belongsTo(PromoCode::class,"promo_code_id");
    }
}
