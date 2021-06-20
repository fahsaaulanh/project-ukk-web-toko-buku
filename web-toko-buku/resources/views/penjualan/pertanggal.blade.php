@extends('adminlte::page')
@section('title', 'Distributor')
@section('content_header')
<h1 class="m-0 text-dark">Data Penjualan Pertanggal</h1>

@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="table-responsive">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>No Faktur</th>
                                <th>Id Buku</th>
                                <th>Jumlah Beli</th>
                                <th>Bayar</th>
                                <th>Kembalian</th>
                                <th>Total Harga</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>
                                    {{ $item->id }}
                                </td>
                                <td>
                                    {{ $item->id_buku }}
                                </td>
                                <td>
                                    {{ $item->jumlah_beli }}
                                </td>
                                <td>
                                    {{ $item->bayar }}
                                </td>
                                <td>
                                    {{ $item->kembalian }}
                                </td>
                                <td>
                                    {{ $item->total_harga }}
                                </td>
                                <td>
                                    {{ $item->tanggal }}
                                </td>
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