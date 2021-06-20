{{ csrf_field() }}
<div class="form-group">
    <label for="nama_distributor" class="col-sm-2 control-label">Nama Distributor</label>
    <div class="col-sm-10">
        <input type="text" name="nama_distributor" class="form-control" value="{{ $nama_distributor ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
        <input type="text" name="alamat" class="form-control" value="{{ $alamat ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="telpon" class="col-sm-2 control-label">Telpon</label>
    <div class="col-sm-10">
        <input type="text" name="telpon" class="form-control" value="{{ $telpon ?? '' }}">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="{{ route('distributor.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>