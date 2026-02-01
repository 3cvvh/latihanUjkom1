<?php

namespace App\Filament\Resources\PromoCodes\Pages;

use App\Filament\Resources\PromoCodes\PromoCodeResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePromoCode extends CreateRecord
{
    protected static string $resource = PromoCodeResource::class;
    //meng override agar setelah membuat data redirect ke index
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl("index",['record' => $this->record]);
    }
}
