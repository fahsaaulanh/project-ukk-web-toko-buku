{{ csrf_field() }}
<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
        <input type="text" name="name" class="form-control" value="">
    </div>
</div>
<div class="form-group">
    <label for="judul" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        <input type="email" name="email" class="form-control" value="">
    </div>
</div>
<div class="form-group">
    <label for="noisbn" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        <input type="password" name="password" class="form-control" value="">
    </div>
</div>
<div class="form-group">
    <label for="address" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
        <input type="text-area" name="address" class="form-control" value="">
    </div>
</div>
<div class="form-group">
    <label for="telphone" class="col-sm-2 control-label">No Telpon</label>
    <div class="col-sm-10">
        <input type="text" name="telphone" class="form-control" value="">
    </div>
</div>
<div class="form-group">
    <label for="tahun" class="col-sm-2 control-label">Hak Akses</label>
    <div class="col-sm-10">
        <select name="akses" class="form-control" id="">
            <option value=""></option>
            <option value="kasir">Kasir</option>
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
        </select>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="{{ route('buku.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>

<input type="hidden" name="ppn" class="form-control" value="5">