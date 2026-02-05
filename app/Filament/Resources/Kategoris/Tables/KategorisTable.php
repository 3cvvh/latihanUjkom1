<?php

namespace App\Filament\Resources\Kategoris\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

use function Laravel\Prompts\text;

class KategorisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name") //membuat field di table untuk menampilkan data kategori dengan field nama
                ->label("nama kategori"), //label yang bisa menganti table header dari td ini
                ImageColumn::make("gambar") //menampilkan column gambar kategori
                ->disk("public")
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(), //memuncul kan btn edit
                DeleteAction::make() //mennculkan btn delete
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
