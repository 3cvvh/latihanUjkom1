<?php

namespace App\Filament\Resources\Kategoris\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KategoriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("name")
                ->string() //agar hanya string yang bisa msuk
                ->label("nama kategori")
                ->required(), //agar input harus diisi
                FileUpload::make("gambar") //membuat input untuk meng uploud foto
                ->image() //agar hanya image yang dimasukan
                ->nullable() //membuat field jadi opsional
                ->label("gambar kategori") //memberi nama label di atas kategori
                ->directory("kategoriPhotos"), //memilih directory mana nanti photo disimpan
            ]);
    }
}
