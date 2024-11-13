@extends('layouts.app')

@section('title', 'Pesanan')

@section('content')

    <!-- Blog Section End --><!-- Payment Receipt Section Begin -->
<section class="payment-receipt spad">
    <div class="container">
        <div class="receipt__header">
            <h2 style="text-align: center;">Nota Pembayaran Sewa</h2>
            <p style="text-align: center;">Terima kasih telah melakukan pemesanan!</p>
        </div>
        <div class="receipt__body">
            <h4>Detail Penyewa</h4>
            <p> </p>
            <p><strong>Nama Penyewa:</strong> John Doe</p>
            <p><strong>Email:</strong> johndoe@example.com</p>
            <p><strong>No. Telepon:</strong> 081234567890</p>

            <h4>Detail Sewa</h4>
            <p> </p>
            <p><strong>Durasi Sewa:</strong> 3 Hari</p>
            <p><strong>Tanggal Sewa:</strong> 1 Januari 2023</p>
            <p><strong>Tanggal Kembali:</strong> 4 Januari 2023</p>
            <p><strong>Kartu Identitas:</strong> <span id="file-name">KTP_Sample.jpg</span></p>

            <h4>Ringkasan Pembayaran</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Deskripsi</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sewa Per Hari</td>
                        <td>Rp 100.000</td>
                    </tr>
                    <tr>
                        <td>Total Durasi Sewa (3 Hari)</td>
                        <td>Rp 300.000</td>
                    </tr>
                    <tr>
                        <td><strong>Total Pembayaran</strong></td>
                        <td><strong>Rp 300.000</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="receipt__footer">
            <p style="text-align: center;">Jika ada pertanyaan, silakan hubungi kami di <strong>weventura@gmail.com</strong></p>    
        </div>
    </div>
</section>
<!-- Payment Receipt Section End -->
    
    @endsection