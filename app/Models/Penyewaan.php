<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;

    protected $table = 'penyewaan'; // Changed to match migration table name
    protected $primaryKey = 'id_sewa'; // Changed to match migration primary key

    protected $fillable = [
        'invoice',
        'nama_penyewa',
        'tanggal_sewa',
        'durasi_sewa',
        'tanggal_kembali',
        'total_biaya',
        'foto_identitas',
        'status'
    ];

}
