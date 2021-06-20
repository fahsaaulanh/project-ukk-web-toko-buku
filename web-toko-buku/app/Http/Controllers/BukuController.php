<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Inputan;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buku::paginate(10);
        $tampil['data'] = $data;
        return view('buku.index', $tampil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataa = new Inputan;
        $kode = $dataa->Kode();
        return view('buku.create')->with('kode', $kode);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'judul' => 'required',
            'noisbn' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required',
            'ppn' => 'required',
            'diskon' => 'required'
        ]);
        $data = Buku::create($request->all());
        return redirect()->route('buku.index');
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
    public function edit($buku)
    {
        $dataa = new Inputan;
        $kode = $dataa->Kode();
        $data = Buku::findOrFail($buku);
        return view('buku.edit', $data)->with('kode', $kode);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $buku)
    {
        $this->validate($request, [
            'id' => 'required',
            'judul' => 'required',
            'noisbn' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required',
            'ppn' => 'required',
            'diskon' => 'required'
        ]);

        $data = Buku::findOrFail($buku);
        $data->judul = $request->judul;
        $data->noisbn = $request->noisbn;
        $data->penulis = $request->penulis;
        $data->penerbit = $request->penerbit;
        $data->tahun = $request->tahun;
        $data->stok = $request->stok;
        $data->harga_pokok = $request->harga_pokok;
        $data->harga_jual = $request->harga_jual;
        $data->ppn = $request->ppn;
        $data->diskon = $request->diskon;
        $data->save();

        return redirect()->route('buku.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($buku)
    {
        $data = Buku::findOrFail($$buku);
        $data->delete();
    }
}
