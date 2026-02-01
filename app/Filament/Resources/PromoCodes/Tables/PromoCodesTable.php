<?php

namespace App\Filament\Resources\PromoCodes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PromoCodesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("code"), //memunculkan data dari field code di table promo_code
                TextColumn::make("discountAmount") //memunculkan data dari field discount amount di table promo_code
                ->prefix("IDR ") //membuat ada idr di awal
                ->numeric() //agar ada ,
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(), //btn untuk masuk ke form edit
                DeleteAction::make() //btn untuk menghapus record
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
