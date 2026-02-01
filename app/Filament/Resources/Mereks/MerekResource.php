<?php

namespace App\Filament\Resources\Mereks;

use App\Filament\Resources\Mereks\Pages\CreateMerek;
use App\Filament\Resources\Mereks\Pages\EditMerek;
use App\Filament\Resources\Mereks\Pages\ListMereks;
use App\Filament\Resources\Mereks\Pages\ViewMerek;
use App\Filament\Resources\Mereks\Schemas\MerekForm;
use App\Filament\Resources\Mereks\Schemas\MerekInfolist;
use App\Filament\Resources\Mereks\Tables\MereksTable;
use App\Models\Merek;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
// use Merek;

class MerekResource extends Resource
{
    protected static ?string $model = Merek::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Tag;

    protected static ?string $navigationLabel = "Merek produk";

    protected static ?string $recordTitleAttribute = 'Merek';

    public static function form(Schema $schema): Schema
    {
        return MerekForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MerekInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MereksTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMereks::route('/'),
            'create' => CreateMerek::route('/create'),
            'view' => ViewMerek::route('/{record}'),
            'edit' => EditMerek::route('/{record}/edit'),
        ];
    }
}
