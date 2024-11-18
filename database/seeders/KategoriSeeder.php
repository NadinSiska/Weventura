<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        Kategori::insert([
            ['id_kategori' => 1, 'nama_kategori' => 'Elektronik'],
            ['id_kategori' => 2, 'nama_kategori' => 'Perabotan'],
            ['id_kategori' => 3, 'nama_kategori' => 'Pakaian'],
        ]);
    }
}
