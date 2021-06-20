{{ csrf_field() }}
<input type="hidden" name="id" id="" value="{{ $data['id'] }}">
<input type="hidden" name="id_buku" id="" value="{{ $data['id_buku'] }}">
<input type="hidden" name="jumlah_beli" id="" value="{{ $data['jumlah_beli'] }}">
<div class="form-group">
    <label for="id_buku" class="col-sm-2 control-label">Jumlah Bayar</label>
    <div class="row">
        <div class="col-sm-6">
            <input type="number" name="bayar" class="form-control" value="">
        </div>
    </div>
</div>
</div>
<input type="hidden" name="total_harga" id="" value="{{ $data['total_harga'] }}">
<div class="form-group">
    <label for="tanggal" class="col-sm-6 control-label">Tanggal Penjualan</label>
    <div class="col-sm-10">
        <input type="date" name="tanggal" class="form-control" value="">
    </div>
</div>

<!-- input hidden -->



<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Checkout">
    </div>
</div>