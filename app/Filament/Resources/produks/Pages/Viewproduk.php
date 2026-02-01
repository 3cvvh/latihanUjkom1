<?php

namespace App\Filament\Resources\produks\Pages;

use App\Filament\Resources\produks\produkResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class Viewproduk extends ViewRecord
{
    protected static string $resource = produkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
