<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ItemSewa;

class ItemSewaSeeder extends Seeder
{
    public function run()
    {
        ItemSewa::insert([
            // Sewa 1 dengan berbagai barang
            [
                'id_sewa' => 1,
                'id_barang' => 1, // Kamera DSLR
                'quantity' => 1,
                'harga_perhari' => '50000',
                'total_harga' => '50000'
            ],
            [
                'id_sewa' => 1,
                'id_barang' => 2, // Meja Kayu
                'quantity' => 2,
                'harga_perhari' => '30000',
                'total_harga' => '60000'
            ],
            [
                'id_sewa' => 1,
                'id_barang' => 3, // Mikrofon
                'quantity' => 1,
                'harga_perhari' => '20000',
                'total_harga' => '20000'
            ],

            // Sewa 2 dengan berbagai barang
            [
                'id_sewa' => 2,
                'id_barang' => 2, // Meja Kayu
                'quantity' => 1,
                'harga_perhari' => '30000',
                'total_harga' => '30000'
            ],
            [
                'id_sewa' => 2,
                'id_barang' => 4, // Laptop
                'quantity' => 1,
                'harga_perhari' => '100000',
                'total_harga' => '100000'
            ],

            // Sewa 3 dengan berbagai barang
            [
                'id_sewa' => 3,
                'id_barang' => 5, // Proyektor
                'quantity' => 1,
                'harga_perhari' => '70000',
                'total_harga' => '70000'
            ],
            [
                'id_sewa' => 3,
                'id_barang' => 6, // Layar Proyektor
                'quantity' => 1,
                'harga_perhari' => '25000',
                'total_harga' => '25000'
            ],

            // Sewa 4 dengan berbagai barang
            [
                'id_sewa' => 4,
                'id_barang' => 7, // Sound System
                'quantity' => 1,
                'harga_perhari' => '150000',
                'total_harga' => '150000'
            ],
            [
                'id_sewa' => 4,
                'id_barang' => 8, // Mixer
                'quantity' => 1,
                'harga_perhari' => '50000',
                'total_harga' => '50000'
            ],

            // Sewa 5 dengan berbagai barang
            [
                'id_sewa' => 5,
                'id_barang' => 9, // Kamera GoPro
                'quantity' => 1,
                'harga_perhari' => '80000',
                'total_harga' => '80000'
            ],
            [
                'id_sewa' => 5,
                'id_barang' => 10, // Tripod
                'quantity' => 1,
                'harga_perhari' => '20000',
                'total_harga' => '20000'
            ],
        ]);
    }
}
