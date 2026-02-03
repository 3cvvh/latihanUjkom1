<?php

namespace App\Filament\actionBtn;

use App\Models\Transaksi;
use Filament\Actions\Action;
use Illuminate\Support\Facades\Storage;

class downloadProofAction extends Action{
public static function make(?string $name = "downloadProof"): static
{
    return parent::make($name)
    ->label("download proof")
    ->icon("heroicon-o-arrow-down-tray")
    ->action(function($record){
        $data = Transaksi::find($record->id);
    return Storage::download($data->proof);
    })
    ->visible(fn($record) => $record->isPaid == true);
}
}
