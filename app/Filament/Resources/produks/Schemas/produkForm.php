<?php

namespace App\Filament\Resources\produks\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class produkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("name") //untuk memngisi field nama pada table produk
                ->required() //artinya harus diisi
                ->string(), //harus string
                FileUpload::make("thumb") //membuat input file yang akan mengisi data di field thumb
                ->required() //harus diisi
                ->directory("thumb-produks") //foto akan disimpan ke folder thumb-produks
                ->image() //harus imag seprti jpg png jepg
                ->disk("public"),
                Select::make("kategori_id") //membuat input options yang akan mengisi kategori id
                ->relationship("kategori","name") //memanggil relasi pada table produk untuk mengisi options
                ->required(), //harus diisi
                Select::make("merek_id") //sama kaya kategori
                ->relationship("merek","name")
                ->required(),
                Repeater::make("photo") //repeater adalah komponen form yang dipakai ketika mmebuat input berulang
                ->label("foto produk") //memberi label costum
                ->relationship("photos") //memnggil relasi hashmny
                ->schema([
                    FileUpload::make("fotos") //membuat compo form uploud yang akan mengisi field fotos di table produk photos
                    ->directory("detail-produks-imgs") //akan disimpan ke folder ini gambar nya
                    ->disk("public")
                    ->image() //harus img
                ])
                ->default(null) //memberikan default null agar reater awal nya kosong
                ->addActionLabel("tambahkan foto produk") //label tambah pada repeater
                ->columnSpanFull(), //agar input full
                TextInput::make("harga") //membuat input text yang akan mnegisi field harga pada table produk
                ->currencyMask() //agar memiliki koma
                ->prefix("IDR") //agar ada idr di awal(untuk mengindikasikan bahwa mata uang yang dikapai adalaha IDR)
                ->numeric() //agar hanya angka yang boleh masuk
                ->required(), //harus diisi
                TextInput::make("stock") //untuk mengisi field stock
                ->numeric()
                ->required(),
                TextInput::make("about") //untuk mengisi field about
                ->nullable(), //artinya gapapa kalo ga di isi
                Repeater::make("size") //membuat repeater seperti photos bedanya ini size
                ->relationship("produk_size")
                ->schema([
                    TextInput::make("size")
                    ->required()
                    ->label("size")
                ])->required()->addActionLabel("tambahkan ukuran sepatu")->columnSpanFull()

            ]);
    }
}
