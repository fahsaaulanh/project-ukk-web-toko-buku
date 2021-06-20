<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inputan extends Model
{
    public function Kode()
    {
        $kode = DB::table('bukus')->max('id');
        $addnol = '';
        $kode = str_replace('BQU', '', $kode);
        $kode = (int) $kode + 1;
        $incrementsKode = $kode;

        if (strlen($kode <= 9)) {
            $addnol = "000000000";
        } elseif (strlen($kode <= 99)) {
            $addnol = "00000000";
        } elseif (strlen($kode <= 999)) {
            $addnol = "0000000";
        }

        $kodeBaru = 'BQU' . $addnol . $incrementsKode;
        return $kodeBaru;
    }

    public function Kodefk()
    {
        $kode = DB::table('penjualans')->max('id');
        $addnol = '';
        $kode = str_replace('FK', '', $kode);
        $kode = (int) $kode + 1;
        $incrementsKode = $kode;

        if (strlen($kode <= 9)) {
            $addnol = "000000000";
        } elseif (strlen($kode <= 99)) {
            $addnol = "00000000";
        } elseif (strlen($kode <= 999)) {
            $addnol = "000000000";
        }

        $kodeBaru = 'FK' . $addnol . $incrementsKode;
        return $kodeBaru;
    }
}
