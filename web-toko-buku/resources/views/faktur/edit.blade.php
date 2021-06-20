@extends('adminlte::page')
@section('title', 'distributor')
@section('content_header')
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
            <div class="card-heading">
                <div class="card-title">
                </div>
            </div>
            <div class="card-body">
                <form class="form" method="post">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <tbody>
                                <tr>
                                    <th>Judul</th>
                                    <th>Jumlah Beli</th>
                                    <th>Harga Satuan</th>
                                    <th>PPN</th>
                                    <th>Diskon</th>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <td>{{ $data['judul'] }}</td>
                                    <td>{{ $data['jumlah_beli'] }}</td>
                                    <td>{{ $data['harga_jual'] }}</td>
                                    <td>{{ $data['ppn']}}%</td>
                                    <td>{{ $data['diskon'] }}%</td>

                                    <td align="right">{{ $data['total_harga'] }} </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right">Jumlah</td>
                                    <td colspan="3"><strong>{{ $data['jumlah_beli'] }} buku</strong></td>
                                    <td class="text-right">Grand Total</td>
                                    <td class="text-right"><strong>{{ $data['total_harga'] }}</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-right">Bayar</td>
                                    <td class="text-right"><strong>{{ $data['bayar'] }}</strong></td>
                                </tr>
                                <tr>

                                    <td colspan="6" class="text-right">Kembalian</td>
                                    <td class="text-right"><strong>{{ $data['kembalian'] }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a target="_blank" href="/faktur/{{ $data['id'] }}/struk" class="btn btn-success btn-lg btn-block">Cetak Struk</a> <a href="?menu=penjualan" class="btn btn-primary btn-lg btn-block">Kembali</a>
                </form>
            </div>
            <!--/panel content-->
        </div>
    </div>
</div>

@stop
@section('plugins.Pace', true)