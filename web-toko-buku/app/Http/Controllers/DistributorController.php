<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributor;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Distributor::paginate(10);
        $tampil['data'] = $data;
        return view('distributor.index', $tampil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distributor.create');
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
            'nama_distributor' => 'required',
            'alamat' => 'required',
            'telpon' => 'required'
        ]);

        $data = Distributor::create($request->all());
        return redirect()->route('distributor.index');
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
    public function edit($distributor)
    {
        $data = Distributor::findOrFail($distributor);
        return view('distributor.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $distributor)
    {

        $this->validate($request, [
            'nama_distributor' => 'required',
            'alamat' => 'required',
            'telpon' => 'required'
        ]);

        $data = Distributor::findOrFail($distributor);
        $data->nama_distributor = $request->nama_distributor;
        $data->alamat = $request->alamat;
        $data->telpon = $request->telpon;
        $data->save();

        return redirect()->route('distributor.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($distributor)
    {
        $data = Distributor::findOrFail($$distributor);
        $data->delete();
    }
}
