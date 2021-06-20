@extends('adminlte::page')
@section('title', 'Distributor')
@section('content_header')
<h1 class="m-0 text-dark">Manajemen Pasok </h1>

@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary btn-md" href="{{ route('pasok.create') }}">
                    <i class="fa fa-plus"></i> Tambah Data Pasok
                </a>
            </div>
            <div class="table-responsive">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Nama Distributor</th>
                                <th>Judul</th>
                                <th>No ISBN</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Stok</th>
                                <th>Harga Jual</th>
                                <th>Jumlah Pasok</th>
                                <th>Tanggal</th>
                                <th style="width: 10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>
                                    {{ $item->nama_distributor }}
                                </td>
                                <td>
                                    {{ $item->judul }}
                                </td>
                                <td>
                                    {{ $item->noisbn }}
                                </td>
                                <td>
                                    {{ $item->penulis }}
                                </td>
                                <td>
                                    {{ $item->penerbit }}
                                </td>
                                <td>
                                    {{ $item->stok }}
                                </td>
                                <td>
                                    {{ $item->harga_jual }}
                                </td>
                                <td>
                                    {{ $item->jumlah }}
                                </td>
                                <td>
                                    {{ $item->tanggal }}
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-success" href="{{ route('pasok.edit', ['pasok' => $item->id]) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-primary" onclick="hapus('{{ $item->id }}')" href="#">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div <div class="card-footer clearfix text-right">
        </div>
    </div>
</div>
</div>@stop
@section('plugins.Sweetalert2', true)
@section('plugins.Pace', true)
@section('js')
@if (session('success'))
<script type="text/javascript">
    Swal.fire(
        'Sukses!',
        '{{ session(',
        success, ') }}',
        'success'
    )
</script>
@endif
<script type="text/javascript">
    function hapus(id) {
        Swal.fire({
            title: 'Konfirmasi',
            text: "Yakin menghapus data ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#dd3333',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "/pasok/" + id,
                    type: 'DELETE',
                    data: {
                        '_token': $('meta[name=csrf-token]').attr("content"),
                    },
                    success: function(result) {
                        Swal.fire(
                            'Sukses!',
                            'Berhasil Hapus',
                            'success'
                        );
                        location.reload();
                    }
                });
            }
        })
    }
</script>
@stop