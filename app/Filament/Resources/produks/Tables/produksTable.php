<?php

namespace App\Filament\Resources\produks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class produksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name"), //bergunak untuk menampilkan data produk dari field nama
                TextColumn::make("stock"), //berguna untuk menampilkan data produk dari field stock
                ImageColumn::make("thumb"),
                TextColumn::make("harga") //memuncul kan harga produk
                ->numeric() //agar ada ,
                ->prefix("IDR "), //agar ada idr di awal
                TextColumn::make("kategori.name"), //memanggil relasi dan field name di relasi tsbt
                TextColumn::make("merek.name") //sama kaya kategori
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(), //melihat detail produk
                EditAction::make(), //untuk memunculkan form edit
                DeleteAction::make() //btn untuk delete data
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
