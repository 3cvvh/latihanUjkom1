<?php

namespace App\Filament\Resources\Transaksis\Pages;

use Exception;
use App\Models\Produk;
use App\Models\PromoCode;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Illuminate\Support\Facades\DB;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Transaksis\TransaksiResource;

class EditTransaksi extends EditRecord
{
    protected static string $resource = TransaksiResource::class;

    public function mutateFormDataBeforeSave(array $data): array
    {
        // Ambil data produk berdasarkan shoe_id yang dipilih user
        $produk = Produk::findOrFail($data["shoe_id"]);

        // Hitung subtotal dari harga produk x jumlah barang
        $subtotalAmount = $produk->harga * $data["jumlah"];

        // Mulai transaksi database untuk menjaga konsistensi data
        DB::beginTransaction();

        try {
            // Validasi: jumlah barang yang dibeli tidak boleh melebihi stok
            if ($data["jumlah"] >= $produk->stock) {
                throw new Exception("Jumlah produk tidak mencukupi");
            }

            // Jika ada promo code, hitung diskon dan total akhir
            // Jika transaksi sudah dibayar, kurangi stok produk
            if ($data["isPaid"]) {
                $produk->stock -= $data["jumlah"];
            }

            // Simpan perubahan stok ke database
            $produk->save();

            // Commit transaksi database
            DB::commit();

            // Tambahkan nilai subtotal dan grand total ke data yang akan disimpan
            $data["subTotal_amount"] = $subtotalAmount;
            $data["grandTotal_amount"] = $grandTotal ?? $subtotalAmount;

            return $data;

        } catch (Exception $e) {
            // Jika terjadi error, rollback transaksi dan tampilkan notifikasi error
            DB::rollBack();

            Notification::make()
                ->title($e->getMessage())
                ->danger()
                ->send();

            // Hentikan proses simpan
            $this->halt();
        }

        // Return data meskipun sudah di-halt (tidak akan dipakai)
        return $data;

    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
