<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Buku;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function databuku()
    {
        $data = Buku::get();
        $tampil['data'] = $data;
        return view('laporan-admin.data_buku', $tampil);
    }

    public function caripenulis()
    {
        $data = Buku::get();
        $tampil['data'] = $data;
        return view('laporan-admin.cari_penulis', $tampil);
    }

    public function cetakpenulis(Request $request)
    {
        $data = DB::table('bukus')
            ->where('penulis', $request->penulis)
            ->paginate();

        $tampil['data'] = $data;
        return view('laporan-admin.berdasarkan_penulis', $tampil)
            ->with('penulis', $request->penulis);
    }

    public function seringterjual()
    {
        $max = Buku::max('terjualn');
        $data = DB::table('bukus')
            ->where('terjualn', $max)
            ->paginate();

        return view('laporan-admin.sering_terjual', $data);
    }

    public function tidakterjual()
    {
        $data = DB::table('bukus')
            ->where('terjualn', NULL)
            ->paginate();

        $tampil['data'] = $data;
        return view('laporan-admin.tidak_terjual', $tampil);
    }

    //Kasir

    public function pasok()
    {
        $data = DB::table('pasoks')
            ->join('bukus', 'pasoks.id_buku', '=', 'bukus.id')
            ->join('distributors', 'pasoks.id_distributor', '=', 'distributors.id')
            ->select('pasoks.id', 'distributors.nama_distributor', 'bukus.judul', 'bukus.noisbn', 'bukus.penulis', 'bukus.penerbit', 'bukus.stok', 'bukus.harga_jual', 'pasoks.tanggal', 'pasoks.jumlah')
            ->get();

        $tampil['data'] = $data;

        return view('laporan-admin.pasok', $tampil);
    }
}
