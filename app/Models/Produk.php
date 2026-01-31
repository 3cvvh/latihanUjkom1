<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    protected $guarded = ["id"]; //memilih field apa saja yang tidak boleh di isi(berarti sisa nya boleh diisi)
    public function kategori():BelongsTo
    {
      return $this->belongsTo(Kategori::class,"kategori_id");
    }
    public function merek():BelongsTo
    {
        return $this->belongsTo(Merek::class,"merek_id");
    }
    public function photos():HasMany
    {
        return $this->hasMany(ProdukPhoto::class,"shoe_id");
    }
    public function produk_size():HasMany
    {
        return $this->hasMany(ProdukSize::class,"shoe_id");
    }
}
