<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'id',
        'id_buku',
        'id_kasir',
        'jumlah_beli',
        'bayar',
        'kembalian',
        'total_harga',
        'tanggal'
    ];

    protected $casts = [
        "id" => 'string'
    ];
}
