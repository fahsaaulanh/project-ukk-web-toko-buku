@extends('adminlte::page')
@section('title', 'distributor')
@section('content_header')
<h1 class="m-0 text-dark">Manajemen Pasok</h1>
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
            <div class="card-header">Tambah Pasok Buku</div>
            <div class="caed-body">
                <form action="{{ route('pasok.store') }}" method="post">
                    @include('pasok.form')
                </form>
            </div>
        </div>
    </div>
</div>

@stop
@section('plugins.Pace', true)