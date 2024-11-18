<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSewa extends Model
{
    use HasFactory;

    protected $table = 'item_sewa'; // Changed to match migration table name
    protected $primaryKey = 'id'; // Changed to match migration primary key

    protected $fillable = [
        'id_sewa',
        'id_barang',
        'quantity',
        'harga_perhari',
        'total_harga'
    ];

    public function penyewaan()
    {
        return $this->belongsTo(Penyewaan::class, 'id_sewa', 'id_sewa');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
