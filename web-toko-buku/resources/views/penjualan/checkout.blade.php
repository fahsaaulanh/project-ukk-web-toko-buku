@extends('adminlte::page')
@section('title', 'distributor')
@section('content_header')
<h1 class="m-0 text-dark">Manajemen Transaksi</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            <h4><i class="icon fa fa-warning"></i> Perhatian!</h4>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card">
            <div class="card-header">Form Penjualan</div>
            <div class="caed-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <tbody>
                            <tr>
                                <th>Judul</th>
                                <th>Harga Satuan</th>
                                <th>Jumlah Beli</th>
                                <th>PPN</th>
                                <th>Diskon</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <td>{{ $data['judul'] }}</td>
                                <td>Rp.{{ $data['harga_jual'] }}</td>
                                <td>{{ $data['jumlah_beli'] }}</td>
                                <td>{{ $data['ppn'] }} %</td>
                                <td>{{ $data['diskon']}} %</td>
                                <td align="right">Rp.{{ $data['total_harga'] }}</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-right btn-danger">Grand Total</td>
                                <td class="text-right btn-success"><strong>Rp.{{ $data['total_harga'] }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <form action="/penjualan/store" method="post">
                    @include('penjualan.form_checkout')
                </form>
            </div>
        </div>
    </div>
</div>

@stop
@section('plugins.Pace', true)