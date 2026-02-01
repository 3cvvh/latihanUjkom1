<?php

namespace App\Filament\Resources\produks\Pages;

use App\Filament\Resources\produks\produkResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class Listproduks extends ListRecords
{
    protected static string $resource = produkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
