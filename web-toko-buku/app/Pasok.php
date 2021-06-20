<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    protected $fillable = [
        'id_distributor',
        'id_buku',
        'jumlah',
        'tanggal'
    ];
}
