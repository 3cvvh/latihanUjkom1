<?php

namespace App\Filament\Resources\Mereks\Pages;

use App\Filament\Resources\Mereks\MerekResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMerek extends ViewRecord
{
    protected static string $resource = MerekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
