<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ["sepatu lari","sepatu santai"];
        foreach($data as $da){
        Kategori::create([
            "name" => $da
        ]);
        }
    }
}
