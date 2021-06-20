@extends('adminlte::page')
@section('title', 'Buku')
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
            <div class="card-header">Cari Data Penjualan Pertanggal</div>
            <div class="caed-body">
                <form action="/penjualan/tanggal" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="penulis" class="col-sm-2 control-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal" class="form-control" id="">
                            <!-- <select name="id" id="" class="form-control">
                                @foreach($data as $item)
                                <option value="{{ $item->id }}" {{ ( ($id??'')==$item->id) ? 'selected' : '' }}>
                                    {{ $item->tanggal }}
                                </option>
                                @endforeach
                            </select> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-success btn-md col-12" name="simpan" value="Cari">
                        </div>
                    </div>

                    <input type="hidden" name="ppn" class="form-control" value="5">
                </form>
            </div>
        </div>
    </div>
</div>

@stop
@section('plugins.Pace', true)