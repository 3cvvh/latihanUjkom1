<?php

namespace App\Filament\Resources\Mereks\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;



                // TextInput::make("name") berguna untuk memasukan data ke field nama
                // ->required() berguna agar input ini harus diisi
                // ->label("nama merek"), memberi label pada input
                // FileUpload::make("icon") mengisi data pada field icon di table merek
                // ->label("foto produk")
                // ->image()
                // ->directory("merek-photos") foto akan disimpan di directory tsbt
                // ->nullable() tidak harus diisi
class MerekForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("name") //inputan untuk memasukan request user
                ->required() //kalo ada ini berarti harus diisi
                ->label("nama merek"), //costum label agar sesuai dengan keinginan author
                FileUpload::make("icon") // membuat input file
                ->label("foto produk") //label
                ->directory("merek-photos") //memilih directory mana foto akan di uploud
                ->image() //kalo ada ini tipe file nya harus img sepreti png jpg
                ->nullable() //tidak apa apa kalo ga diisi
                ->disk("public")
            ]);
    }
}
