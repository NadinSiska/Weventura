@extends('layouts.app')

@section('title', 'Keranjang')

@section('content')

<style>
    /* Tambahkan CSS di sini */
    .gambar-container {
        width: 80px;
        height: 80px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .gambar {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
</style>

<div class="container">
    <h3 style="text-align: center; font-weight: bold;">Keranjang Sewa Alat</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Alat</th>
                <th>Gambar Alat</th>
                <th>Deskripsi Singkat</th>
                <th>Harga Sewa per Hari</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tenda Camping</td>
                <td>
                    <div class="gambar-container">
                        <img src="app/img/keranjang/tenda.jpg" alt="Tenda Camping" class="gambar">
                    </div>
                </td>
                <td>Tenda ringan untuk 2-3 orang. Mudah dipasang.</td>
                <td>Rp 100.000</td>
                <td>
                    <button type="button" class="btn btn-success">Sewa</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>Kursi Lipat</td>
                <td>
                    <div class="gambar-container">
                        <img src="app/img/keranjang/kursi.jpg" alt="Kursi Lipat" class="gambar">
                    </div>
                </td>
                <td>Kursi lipat nyaman, cocok untuk camping.</td>
                <td>Rp 30.000</td>
                <td>
                    <button type="button" class="btn btn-success">Sewa</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>Meja Lipat</td>
                <td>
                    <div class="gambar-container">
                        <img src="app/img/keranjang/meja.jpg" alt="Meja Lipat" class="gambar">
                    </div>
                </td>
                <td>Meja lipat praktis untuk piknik.</td>
                <td>Rp 50.000</td>
                <td>
                    <button type="button" class="btn btn-success">Sewa</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>Sleeping Bag</td>
                <td>
                    <div class="gambar-container">
                        <img src="app/img/keranjang/sleepingbag.jpg" alt="Sleeping Bag" class="gambar">
                    </div>
                </td>
                <td>Sleeping bag hangat untuk malam di luar.</td>
                <td>Rp 70.000</td>
                <td>
                    <button type="button" class="btn btn-success">Sewa</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
    <h5 style="font-weight: bold;">Total Sewa: Rp 250.000</h5>
    <button class="btn btn-primary sewa-semua my-4">Sewa Barang yang Dipilih</button>
</div>
@endsection
