<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluarMasukBarang extends Model
{
    use HasFactory;

    protected $table = 'KeluarMasukBarang';

    protected $fillable = [
        'kode',
        'nama_barang',
        'deskripsi',
        'harga_satuan',
        'jumlah',
        'foto'
    ];
}
