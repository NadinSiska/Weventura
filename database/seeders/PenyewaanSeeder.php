<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penyewaan;

class PenyewaanSeeder extends Seeder
{
    public function run()
    {
        Penyewaan::insert([
            [
                'id_sewa' => 1,
                'invoice' => 'INV001',
                'nama_penyewa' => 'John Doe',
                'tanggal_sewa' => '2024-11-01',
                'durasi_sewa' => 3,
                'tanggal_kembali' => '2024-11-04',
                'total_biaya' => '130000',
                'foto_identitas' => 'id1.jpg',
                'status' => '0'
            ],
            [
                'id_sewa' => 2,
                'invoice' => 'INV002',
                'nama_penyewa' => 'Jane Smith',
                'tanggal_sewa' => '2024-11-02',
                'durasi_sewa' => 2,
                'tanggal_kembali' => '2024-11-04',
                'total_biaya' => '130000',
                'foto_identitas' => 'id2.jpg',
                'status' => '2'
            ],
            [
                'id_sewa' => 3,
                'invoice' => 'INV003',
                'nama_penyewa' => 'Alice Johnson',
                'tanggal_sewa' => '2024-11-03',
                'durasi_sewa' => 1,
                'tanggal_kembali' => '2024-11-04',
                'total_biaya' => '65000',
                'foto_identitas' => 'id3.jpg',
                'status' => '1'
            ],
            [
                'id_sewa' => 4,
                'invoice' => 'INV004',
                'nama_penyewa' => 'Bob Brown',
                'tanggal_sewa' => '2024-11-04',
                'durasi_sewa' => 4,
                'tanggal_kembali' => '2024-11-08',
                'total_biaya' => '260000',
                'foto_identitas' => 'id4.jpg',
                'status' => '3'
            ],
            [
                'id_sewa' => 5,
                'invoice' => 'INV005',
                'nama_penyewa' => 'Charlie Davis',
                'tanggal_sewa' => '2024-11-05',
                'durasi_sewa' => 5,
                'tanggal_kembali' => '2024-11-10',
                'total_biaya' => '325000',
                'foto_identitas' => 'id5.jpg',
                'status' => '4'
            ],
        ]);
    }
}
