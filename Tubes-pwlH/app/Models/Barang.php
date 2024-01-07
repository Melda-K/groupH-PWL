<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['kode_barang', 'nama_barang', 'qty', 'harga', 'id_produk'];

    public function product()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}
