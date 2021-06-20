<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Semua Data Buku</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <a href="#" onclick="document.getElementById('print').style.display='none';window.print();"><img src="../gambar/print-icon.png" id="print" width="25" height="25" border="0"> Cetak</a>
            <br>
            <div class="clearfix"></div>
            <div class="card card-default mt-10">
                <div class="card-header">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-2 col-xs-2"> <img class="col-md-12 col-xs-12" src="../gambar/logorpl.png"> </div>
                            <div class="col-md-10 surat-title">
                                <h1>RPL Book Store</h1>
                                <p>Jl. Raya Wangun, Kel. Sindangsari</p>
                                <p>No. Telp 02518356481 | Web : rplbookstore.com | Email : rplbookstore@gmail.com</p>
                                <h2 class="text-center">LAPORAN Semua Data Buku</h2>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
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
                                <tr>
                                    <?php $no++; ?>
                                    @endforeach
                            </tbody>
                            <th class="text-right">Jumlah</th>
                            <td colspan="10"><strong><?php echo $no; ?> Buku</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--/card content-->
            </div>

        </div>
        <!--/col-span-12-->
    </div>
    </div>
    <!-- /Main -->
</body>

</html>