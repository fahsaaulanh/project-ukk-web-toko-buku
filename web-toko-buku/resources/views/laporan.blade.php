@extends('adminlte::page')
@section('title', 'Laporan')
@section('content_header')
<h1 class="m-0 text-dark">Generate Laporan</h1>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Download Laporan Data Buku Format PDF</h3>
            </div>
            <div class="card-body">
                <a class="btn btn-app" href="/laporan-admin/databuku">
                    <i class="fas fa-book"></i>Data Seluruh Buku PDF
                </a>
                <a class="btn btn-app" href="/laporan-admin/caripenulis">
                    <i class="fas fa-user-tie"></i>Berdasarkan Penulis
                </a>
                <a class="btn btn-app" href="laporan-admin/seringterjual">
                    <i class="fas fa-money-bill-alt"></i>Paling Banyak Terjual
                </a>
                <a class="btn btn-app" href="laporan-admin/tidakterjual">
                    <i class="fas fa-building"></i>Tidak Pernah Terjual
                </a>
                <a class="btn btn-app" href="laporan-admin/pasok">
                    <i class="fas fa-cash-register"></i>Data Pasok Buku
                </a>
            </div>
        </div>
    </div>
</div>
@stop