<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tmppenjualan extends Model
{
    protected $fillable = [
        'id_buku',
        'jumlah_beli',
        'total_harga'
    ];
}
