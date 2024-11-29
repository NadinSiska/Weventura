@extends('layouts.app')

@section('title', 'Favorite')

@section('content')
<div class="container">
    <h3 style="text-align: center; font-weight: bold;">Barang yang Difavoritkan</h3>
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
                    <button type="button" class="btn btn-danger">Hapus dari Favorit</button>

                <td>
                    <div class="gambar-container">
                        <img src="app/img/keranjang/kursi.jpg" alt="Kursi Lipat" class="gambar">
                    </div>
                </td>
                <td>Kursi lipat nyaman, cocok untuk camping.</td>
                <td>Rp 30.000</td>
                <td>
                    <button type="button" class="btn btn-danger">Hapus dari Favorit</button>
                </td>
            </tr>
            <tr>
                <td>Meja Lipat</td>
                <td>
                    <div class="gambar-container">
                        <img src="app/img/keranjang/meja.jpg" alt="Meja Lipat" class="gambar">php
                    </div>
                </td>
                <td>Meja lipat praktis untuk piknik.</td>
                <td>Rp 50.000</td>
                <td>
                    <button type="button" class="btn btn-danger">Hapus dari Favorit</button>
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
                    <button type="button" class="btn btn-danger">Hapus dari Favorit</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection