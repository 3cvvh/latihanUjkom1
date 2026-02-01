<?php

namespace App\Filament\Resources\Mereks\Pages;

use App\Filament\Resources\Mereks\MerekResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMereks extends ListRecords
{
    protected static string $resource = MerekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
