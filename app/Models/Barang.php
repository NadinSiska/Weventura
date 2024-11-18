<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    public $timestamps = true;

    protected $fillable = [
        'gambar',
        'nama_barang',
        'deskripsi',
        'stok_barang',
        'harga',
        'id_kategori'
    ];

    
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }
}
