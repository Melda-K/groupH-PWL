<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;

    // protected $table = 'cabangs';
    protected $fillable = ['id_manajer', 'nama_cabang', 'alamat', 'id_supervisor', 'id_kasir', 'id_cabang'];

    public function manajer()
    {
        return $this->belongsTo(User::class, 'id_manajer');
    }

    public function supervisor()
    {
        return $this->belongsTo(User::class, 'id_supervisor');
    }

    public function kasir()
    {
        return $this->belongsTo(User::class, 'id_kasir');
    }

    public function cabang()
    {
        return $this->belongsTo(User::class, 'id_cabang');
    }
}