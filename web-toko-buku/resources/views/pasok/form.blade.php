{{ csrf_field() }}
<div class="form-group">
    <label for="id_distributor" class="col-sm-10 control-label">Nama Distributor</label>
    <div class="col-sm-10">
        <select name="id_distributor" id="" class="form-control">
            <option value=""></option>
            @foreach($distributor as $item)
            <option value="{{ $item->id }}" {{ ( ($id??'')==$item->id) ? 'selected' : '' }}>
                {{ $item->nama_distributor }}
            </option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label for="id_buku" class="col-sm-2 control-label">Judul Buku</label>
    <div class="col-sm-10">
        <select name="id_buku" id="" class="form-control">
            <option value=""></option>
            @foreach($buku as $item)
            <option value="{{ $item->id }}" {{ ( ($id??'')==$item->id) ? 'selected' : '' }}>
                {{ $item->judul }}
            </option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label for="jumlah" class="col-sm-2 control-label">Jumlah</label>
    <div class="col-sm-10">
        <input type="number" name="jumlah" class="form-control" value="{{ $tanggal  ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
    <div class="col-sm-10">
        <input type="date" name="tanggal" class="form-control" value="{{ $tanggal  ?? '' }}">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="{{ route('pasok.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>