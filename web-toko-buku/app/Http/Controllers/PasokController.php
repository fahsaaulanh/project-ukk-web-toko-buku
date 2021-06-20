<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;
use App\Distributor;
use App\Pasok;
use Illuminate\Support\Facades\DB;

class PasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('pasoks')
            ->join('bukus', 'pasoks.id_buku', '=', 'bukus.id')
            ->join('distributors', 'pasoks.id_distributor', '=', 'distributors.id')
            ->select('pasoks.id', 'distributors.nama_distributor', 'bukus.judul', 'bukus.noisbn', 'bukus.penulis', 'bukus.penerbit', 'bukus.stok', 'bukus.harga_jual', 'pasoks.tanggal', 'pasoks.jumlah')
            ->get();

        $tampil['data'] = $data;

        return view('pasok.index', $tampil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bukus = Buku::get();
        $distributors = Distributor::get();
        $buku['buku'] = $bukus;
        $distributor['distributor'] = $distributors;


        return view('pasok.create', $buku, $distributor);
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
            'id_distributor' => 'required',
            'id_buku' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required'
        ]);

        $data = Pasok::create($request->all());

        return redirect()->route('pasok.index');
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
