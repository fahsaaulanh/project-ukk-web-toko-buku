<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inputan;
use App\Buku;
use App\Penjualan;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function transaksi()
    {
        $data = Buku::get();
        $tampil['data'] = $data;
        $dataa = new Inputan;
        $kode = $dataa->Kodefk();
        return view('penjualan.transaksi', $tampil)->with('kode', $kode);
    }

    public function checkout(Request $request)
    {
        $harga = $request->harga_jual * $request->jumlah_beli;
        $ppn = $request->ppn;
        $diskon = $request->diskon;

        $hargappn = $harga + ($harga * $ppn / 100);
        $hargadiskon = $hargappn - ($hargappn * $diskon / 100);

        $tampil['data'] = [
            'id' => $request->id,
            'id_buku' => $request->id_buku,
            'judul' => $request->judul,
            'harga_jual' => $request->harga_jual,
            'jumlah_beli' => $request->jumlah_beli,
            'ppn' => $request->ppn,
            'diskon' => $request->diskon,
            'total_harga' => $hargadiskon
        ];

        return view('penjualan.checkout', $tampil);
    }

    public function store(Request $request)
    {
        //Ambil Data Buku Form DB
        $databuku = Buku::findOrFail($request->id_buku);

        $kembalian = $request->bayar - $request->total_harga;
        $request->merge(['id_kasir' => 3]);
        $request->merge(['kembalian' => $kembalian]);
        $data = Penjualan::create($request->all());
        return redirect('/faktur/' .  $request->id);
    }

    public function data()
    {
        $data = Penjualan::get();
        $tampil['data'] = $data;

        return view('penjualan.data_penjualan', $tampil);
    }

    public function tanggal()
    {
        $data = Penjualan::get();
        $tampil['data'] = $data;
        return view('penjualan.formtanggal', $tampil);
    }

    public function pertanggal(Request $request)
    {
        $data = DB::table('penjualans')
            ->where('tanggal', 'like', '%' . $request->tanggal . '%')
            ->paginate();

        $tampil['data'] = $data;

        return view('penjualan.pertanggal', $tampil);
    }
}
