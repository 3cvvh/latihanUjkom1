<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Merek extends Model
{
    protected $guarded = ["id"]; //memilih field apa saja yang tidak boleh di isi(berarti sisa nya boleh diisi)
    //mutator untuk mengenrate slug
    public function setnameAttribute($value){
    $this->attributes["name"] = $value; //mengambil input name lalu mengisi nya kek field name
    $this->attributes["slug"] = Str::slug($value); //mengambil name yang di input user lalu dibuat menjadi slug setelah itu dimasukan ke field slug
    }
    public function shoe():HasMany
    {
        return $this->hasMany(Produk::class,"merek_id");
    }
}
