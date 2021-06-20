<div class="modal fade in" id="databuku" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="text-left" id="exampleModalLabel">Data Buku</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

            </div>
            <div class="modal-body">
                <div class="clearfix"></div>
                <div id="hasil-cari">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <tbody>
                                <tr>
                                    <th>Judul Buku (klik judul buku)</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                </tr>
                                @foreach($data as $item)
                                <tr>
                                    <td class="text-center"><a title="PILIH" href="?menu=penjualan&id_buku={{ $item->id }}&judul={{ $item->judul }}&harga_jual={{ $item->harga_jual }}&diskon={{ $item->diskon }}&ppn={{ $item->ppn }}">
                                            {{ $item->judul }}
                                    </td>
                                    <td>
                                        {{ $item->penulis }}
                                    </td>
                                    <td>
                                        {{ $item->penerbit }}
                                    </td>
                                    <td>
                                        {{ $item->harga_jual }}
                                    </td>
                                    <td>
                                        {{ $item->stok }}
                                    </td>
                                <tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>