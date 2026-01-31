<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Kategori extends Model
{
    protected $guarded = ["id"]; //memilih field apa saja yang tidak boleh di isi(berarti sisa nya boleh diisi)
    //mutator untuk mengenrate slug
    public function setnameAttribute($value){
    $this->attributes["name"] = $value;
    $this->attributes["slug"] = Str::slug($value);
    }
    public function shoe():HasMany //membuat relasi ke produk agar bisa dipanggil fr nya
    {
        return $this->hasMany(Produk::class,"kategori_id");
    }

}
