<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        "id",
        "judul",
        "noisbn",
        "penulis",
        "penerbit",
        "tahun",
        "stok",
        "harga_pokok",
        "harga_jual",
        "ppn",
        "diskon"
    ];

    protected $casts = [
        "id" => 'string'
    ];
}
