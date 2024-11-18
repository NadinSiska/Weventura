<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    public function run()
    {
        Barang::insert([
            [
                'id_barang' => 1,
                'gambar' => 'barang1.jpg',
                'nama_barang' => 'Kamera DSLR',
                'deskripsi' => 'Kamera profesional untuk fotografi',
                'stok_barang' => 10,
                'harga' => '50000',
                'id_kategori' => 1
            ],
            [
                'id_barang' => 2,
                'gambar' => 'barang2.jpg',
                'nama_barang' => 'Meja Kayu',
                'deskripsi' => 'Meja kayu solid untuk ruang kerja',
                'stok_barang' => 5,
                'harga' => '30000',
                'id_kategori' => 2
            ],
            [
                'id_barang' => 3,
                'gambar' => 'barang3.jpg',
                'nama_barang' => 'Mikrofon',
                'deskripsi' => 'Mikrofon untuk presentasi atau rekaman',
                'stok_barang' => 15,
                'harga' => '20000',
                'id_kategori' => 1
            ],
            [
                'id_barang' => 4,
                'gambar' => 'barang4.jpg',
                'nama_barang' => 'Laptop',
                'deskripsi' => 'Laptop untuk bekerja atau belajar',
                'stok_barang' => 3,
                'harga' => '100000',
                'id_kategori' => 1
            ],
            [
                'id_barang' => 5,
                'gambar' => 'barang5.jpg',
                'nama_barang' => 'Kamera GoPro',
                'deskripsi' => 'Kamera aksi untuk petualangan',
                'stok_barang' => 7,
                'harga' => '80000',
                'id_kategori' => 1
            ],
            [
                'id_barang' => 6,
                'gambar' => 'barang6.jpg',
                'nama_barang' => 'Tripod',
                'deskripsi' => 'Tripod untuk stabilisasi kamera',
                'stok_barang' => 10,
                'harga' => '20000',
                'id_kategori' => 1
            ],
            [
                'id_barang' => 7,
                'gambar' => 'barang7.jpg',
                'nama_barang' => 'Proyektor',
                'deskripsi' => 'Proyektor untuk presentasi',
                'stok_barang' => 4,
                'harga' => '70000',
                'id_kategori' => 2
            ],
            [
                'id_barang' => 8,
                'gambar' => 'barang8.jpg',
                'nama_barang' => 'Layar Proyektor',
                'deskripsi' => 'Layar untuk proyektor',
                'stok_barang' => 5,
                'harga' => '25000',
                'id_kategori' => 2
            ],
            [
                'id_barang' => 9,
                'gambar' => 'barang9.jpg',
                'nama_barang' => 'Sound System',
                'deskripsi' => 'Sistem suara untuk acara',
                'stok_barang' => 2,
                'harga' => '150000',
                'id_kategori' => 3
            ],
            [
                'id_barang' => 10,
                'gambar' => 'barang10.jpg',
                'nama_barang' => 'Mixer',
                'deskripsi' => 'Mixer audio untuk acara',
                'stok_barang' => 3,
                'harga' => '50000',
                'id_kategori' => 3
            ]
        ]);
    }
}
