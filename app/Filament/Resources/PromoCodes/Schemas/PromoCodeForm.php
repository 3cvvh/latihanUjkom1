<?php

namespace App\Filament\Resources\PromoCodes\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PromoCodeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("code") //untuk mengisi field code
                ->label("code discount")
                ->required(), //harus diisi kalo pake ini
                TextInput::make("discountAmount") //untuk mengisi field discount amount
                ->label("total discount") //label costum
                ->required() //harus diisi
                ->numeric() //agar yang masuk cuma angka
                ->currencyMask(), //memberikan ,
                DatePicker::make("expire") //input date untuk mengisi field expire
                ->label("kapan expire")
            ]);
    }
}
