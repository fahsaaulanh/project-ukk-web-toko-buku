{{ csrf_field() }}
<div class="form-group">
    <label for="penulis" class="col-sm-2 control-label">Nama Penulis</label>
    <div class="col-sm-10">
        <select name="penulis" id="" class="form-control">
            @foreach($data as $item)
            <option value="{{ $item->penulis }}" {{ ( ($penulis??'')==$item->penulis) ? 'selected' : '' }}>
                {{ $item->penulis }}
            </option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-12">
        <input type="submit" class="btn btn-success btn-md col-12" name="simpan" value="Cari">
    </div>
</div>

<input type="hidden" name="ppn" class="form-control" value="5">