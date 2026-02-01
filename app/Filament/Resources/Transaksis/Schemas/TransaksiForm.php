<?php

namespace App\Filament\Resources\Transaksis\Schemas;

use App\Models\ProdukSize;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TransaksiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("name") //membuat input name
                ->required() //harus diisi
                ->label("nama transaksi"), //costum label
                Select::make("shoe_id") //membuat option product yang akan dipilih
                ->relationship("shoe","name") //memngaggil relasi shoe dan memngambil field name
                ->reactive() //setiap kali user mengubah nilai, filament akan menjalan kan re render state form dan menjalan kan closure yang bergantung pada field itu
                ->required(), //harus diisi
                Select::make("promo_code_id") //option prmo code
                ->relationship("promo_code","code")//memanggil relasi di transaksi lalu mengambil field code
                ->nullable(), //tidak wajib diisi
                FileUpload::make("proof") //untuk mengaploud bukti pembayarn
                ->image()
                ->label("bukti pembayaran")
                ->directory("bukti-pembayaran"),
                TextInput::make("jumlah") //jumlah product
                ->numeric()
                ->required(),
                Select::make("size") //option size
                ->disabled(fn(callable $get) => $get("shoe_id") == false)//akan bisa di input ketika product sudah dipilih
                ->options(fn(callable $get) => ProdukSize::where("shoe_id","=",$get("shoe_id"))->pluck("size","id")), //option manual yang menambil size sesuai product yang dipilih
                TextInput::make("alamat") //input alamat
                ->label("alamat pembeli")
                ->required(),
                Toggle::make("isPaid") //input yang memastikan sudah dibayar atau tidak
                ->default(false) //default nya belum dibayar
            ]);
    }
}
