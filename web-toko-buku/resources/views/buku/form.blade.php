{{ csrf_field() }}
<div class="form-group">
    <label for="id" class="col-sm-2 control-label">Kode Buku</label>
    <div class="col-sm-10">
        <input type="text" name="id" class="form-control" readonly value="{{ $id ?? $kode }}">
    </div>
</div>
<div class="form-group">
    <label for="judul" class="col-sm-2 control-label">Judul</label>
    <div class="col-sm-10">
        <input type="text" name="judul" class="form-control" value="{{ $judul ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="noisbn" class="col-sm-2 control-label">No ISBN</label>
    <div class="col-sm-10">
        <input type="text" name="noisbn" class="form-control" value="{{ $noisbn ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="penulis" class="col-sm-2 control-label">Penulis</label>
    <div class="col-sm-10">
        <input type="text" name="penulis" class="form-control" value="{{ $penulis ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="penerbit" class="col-sm-2 control-label">Penerbit</label>
    <div class="col-sm-10">
        <input type="text" name="penerbit" class="form-control" value="{{ $penerbit ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="tahun" class="col-sm-2 control-label">Tahun</label>
    <div class="col-sm-10">
        <input type="number" name="tahun" class="form-control" value="{{ $tahun ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="stok" class="col-sm-2 control-label">Stok</label>
    <div class="col-sm-10">
        <input type="number" name="stok" class="form-control" value="{{ $stok ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="harga_pokok" class="col-sm-2 control-label">Harga Pokok</label>
    <div class="col-sm-10">
        <input type="number" name="harga_pokok" class="form-control" value="{{ $harga_pokok ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="harga_jual" class="col-sm-2 control-label">Harga Jual</label>
    <div class="col-sm-10">
        <input type="number" name="harga_jual" class="form-control" value="{{ $harga_jual ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="diskon" class="col-sm-2 control-label">Diskon</label>
    <div class="col-sm-10">
        <input type="number" name="diskon" class="form-control" value="{{ $diskon ?? '' }}">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="{{ route('buku.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>

<input type="hidden" name="ppn" class="form-control" value="5">