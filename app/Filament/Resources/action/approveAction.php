<?php
namespace App\Filament\Resources\action;

use App\Models\Produk;
use Exception;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\DB;

class approveAction extends Action{
public static function make(?string $name = "approve"): static
{
    return parent::make($name)
    ->label("approve")
    ->icon("heroicon-o-check")
    ->schema([
        FileUpload::make("proof")
    ])
    ->action(function(array $data,$record){
    try{
    DB::beginTransaction();
    if($record->shoe->stock >= $record->jumlah){
    $produk = Produk::findOrFail($record->shoe->id);
    $produk->stock -= $record->jumlah;
    $record->isPaid = true;
    $record->proof = $data["proof"];
    $record->save();
    $produk->save();
    DB::commit();
    Notification::make()
    ->title("berhasil mengubah data")
    ->success()
    ->send();
    return;
    }
    throw new Exception("gagal, stock tidak mencukupi");
    }catch(Exception $e){
    DB::rollBack();
    Notification::make()
    ->title($e->getMessage())
    ->danger()
    ->send();
    return false;
    }
    return;
    })->visible(fn($record) => $record->isPaid != true);
}
}
