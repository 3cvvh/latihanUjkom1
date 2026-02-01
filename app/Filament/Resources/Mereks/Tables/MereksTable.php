<?php

namespace App\Filament\Resources\Mereks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MereksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name") //memunculkan data dari field nama di table merek
                ->label("nama merek"), //melebeli th
                ImageColumn::make("icon") //memnuculkan gambar dari merek
                ->label("gambar merek") //memberikan label
            ])
            ->filters([
                //
            ])
            ->recordActions([
                // ViewAction::make(),
                EditAction::make(),
                DeleteAction::make()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
