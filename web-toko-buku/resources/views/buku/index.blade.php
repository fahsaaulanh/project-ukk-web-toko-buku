@extends('adminlte::page')
@section('title', 'Distributor')
@section('content_header')
<h1 class="m-0 text-dark">Manajemen Buku</h1>

@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary btn-md" href="{{ route('buku.create') }}">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
            <div class="table-responsive">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Kode Buku</th>
                                <th>Judul</th>
                                <th>No ISBN</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Stok</th>
                                <th>Harga Pokok</th>
                                <th>Harga Jual</th>
                                <th>Diskon</th>
                                <th style="width: 10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>
                                    {{ $item->id }}
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
                                    {{ $item->tahun }}
                                </td>
                                <td>
                                    {{ $item->stok }}
                                </td>
                                <td>
                                    {{ $item->harga_pokok }}
                                </td>
                                <td>
                                    {{ $item->harga_jual }}
                                </td>
                                <td>
                                    {{ $item->diskon }}
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-success" href="{{ route('buku.edit', ['buku' => $item->id]) }}">
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
            {{ $data->links() }}
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
                    url: "/distributor/" + id,
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