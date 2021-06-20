<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Penjualan;

class FakturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penjualan::get();
        $tampil['data'] = $data;

        return view('faktur.index', $tampil);
    }

    public function cek(Request $request)
    {
        $id = $request->id;
        return redirect('/faktur/' . $id);
    }

    public function faktur($id)
    {
        $datapenjualan = Penjualan::findOrFail($id);
        $id_buku = $datapenjualan->id_buku;
        $databuku = Buku::findOrFail($id_buku);

        $tampil['data'] = [
            'id' => $id,
            'judul' => $databuku->judul,
            'jumlah_beli' => $datapenjualan->jumlah_beli,
            'harga_jual' => $databuku->harga_jual,
            'ppn' => $databuku->ppn,
            'diskon' => $databuku->diskon,
            'bayar' => $datapenjualan->bayar,
            'kembalian' => $datapenjualan->kembalian,
            'total_harga' => $datapenjualan->total_harga
        ];

        return view('faktur.edit', $tampil);
    }

    public function struk($id)
    {
        $datapenjualan = Penjualan::findOrFail($id);
        $id_buku = $datapenjualan->id_buku;
        $databuku = Buku::findOrFail($id_buku);

        $tampil['data'] = [
            'id' => $id,
            'judul' => $databuku->judul,
            'jumlah_beli' => $datapenjualan->jumlah_beli,
            'harga_jual' => $databuku->harga_jual,
            'ppn' => $databuku->ppn,
            'diskon' => $databuku->diskon,
            'bayar' => $datapenjualan->bayar,
            'kembalian' => $datapenjualan->kembalian,
            'total_harga' => $datapenjualan->total_harga,
            'tanggal' => $datapenjualan->tanggal
        ];

        return view('faktur.struk', $tampil);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
