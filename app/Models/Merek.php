<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Merek extends Model
{
    protected $guarded = ["id"]; //memilih field apa saja yang tidak boleh di isi(berarti sisa nya boleh diisi)
    // public function setnameAttribute($value){
    // $this->attributes["name"] = $value;
    // $this->attributes["slug"] = Str::slug($value);
    // }
    //mutator untuk mengenrate slug
    public function setSlugAttribute(){
    $name = $this->attributes["name"];
    $this->attributes["slug"] = str::slug($name);
    }
    public function shoe():HasMany
    {
        return $this->hasMany(Produk::class,"merek_id");
    }
}
