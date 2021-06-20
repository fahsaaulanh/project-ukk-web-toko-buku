<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settinglap extends Model
{
    protected $fillable = [
        'nama_perusahaan',
        'alamat',
        'no_tlpn',
        'web',
        'logo',
        'no_hp',
        'email'
    ];
}
