{{ csrf_field() }}
<div class="form-group">
    <label for="id" class="col-sm-2 control-label">No Faktur</label>
    <div class="col-sm-10">
        <input type="text" name="id" class="form-control" readonly value="{{ $kode ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="id_buku" class="col-sm-2 control-label">Nama Buku</label>
    <div class="row">
        <div class="col-sm-6">
            <input type="text" name="judul" class="form-control" readonly value="{{ app('request')->input('judul') ?? '' }}">
        </div>
        <div class="col-sm-4">
            <a type="button" class="btn btn-info" href="#databuku" data-toggle="modal" data-toggle="modal">Lihat Buku</a>
        </div>
    </div>
</div>
</div>
<div class="form-group">
    <label for="jumlah_beli" class="col-sm-2 control-label">Harga</label>
    <div class="col-sm-10">
        <input type="number" name="harga_jual" class="form-control" readonly value="{{ app('request')->input('harga_jual') ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="jumlah_beli" class="col-sm-2 control-label">Jumlah Beli</label>
    <div class="col-sm-10">
        <input type="number" name="jumlah_beli" class="form-control" value="Rp.{{ $jumlah_beli ?? '' }}">
    </div>
</div>

<!-- input hidden -->
<input type="hidden" name="id_buku" id="" value="{{ app('request')->input('id_buku') ?? '' }}">
<input type="hidden" name="diskon" id="" value="{{ app('request')->input('diskon') ?? '' }}">
<input type="hidden" name="ppn" id="" value="{{ app('request')->input('ppn') ?? '' }}">
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Tambah Buku">
    </div>
</div>

@include('penjualan.modal')