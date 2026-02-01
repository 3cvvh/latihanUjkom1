<?php

namespace App\Filament\Resources\produks;

use App\Filament\Resources\produks\Pages\Createproduk;
use App\Filament\Resources\produks\Pages\Editproduk;
use App\Filament\Resources\produks\Pages\Listproduks;
use App\Filament\Resources\produks\Pages\Viewproduk;
use App\Filament\Resources\produks\Schemas\produkForm;
use App\Filament\Resources\produks\Schemas\produkInfolist;
use App\Filament\Resources\produks\Tables\produksTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Models\produk;

class produkResource extends Resource
{
    protected static ?string $model = produk::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ShoppingBag;

    protected static ?string $recordTitleAttribute = 'produk';
    protected static ?string $navigationLabel = "shoes";

    public static function form(Schema $schema): Schema
    {
        return produkForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return produkInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return produksTable::configure($table);
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
            'index' => Listproduks::route('/'),
            'create' => Createproduk::route('/create'),
            'view' => Viewproduk::route('/{record}'),
            'edit' => Editproduk::route('/{record}/edit'),
        ];
    }
}
