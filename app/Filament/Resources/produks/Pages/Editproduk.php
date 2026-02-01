<?php

namespace App\Filament\Resources\produks\Pages;

use App\Filament\Resources\produks\produkResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class Editproduk extends EditRecord
{
    protected static string $resource = produkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
