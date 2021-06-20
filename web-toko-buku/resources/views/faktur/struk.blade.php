<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>STRUCK PENJUALAN</title>
    <link href="../css/styles_cetak.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        window.print();
        window.onfocus = function() {
            window.close();
        }
    </script>
    <style type="text/css">
        body,
        td,
        th {
            font-family: "Times New Roman", Times, serif;
        }

        body {
            margin: 0px auto 0px;
            padding: 3px;
            font-size: 12px;
            color: #000;
            width: 95%;
            background-position: top;
            background-color: #fff;
        }

        .table-list {
            clear: both;
            text-align: left;
            border-collapse: collapse;
            margin: 0px 0px 10px 0px;
            background: #fff;
            max-width: 350px;
        }

        .table-list td {
            color: #000;
            font-size: 10px;
            border-color: #fff;
            border-collapse: collapse;
            vertical-align: center;
            padding: 3px;
            border-bottom: 1px #CCCCCC solid;
            letter-spacing: 1px;
        }

        .table-list tr th {
            font-size: 12px;
        }

        .style2 {
            font-size: 14px;
            font-weight: bold;
        }

        .style4 {
            color: #FF0000
        }

        .style6 {
            color: #000000
        }
    </style>
</head>

<body onload="window.print()">
    <table class="table-list" border="0" cellspacing="0" cellpadding="2">
        <tbody>
            <tr>
                <td height="87" colspan="7" align="center">
                    <span class="style2"><span class="style6">STRUCK PENJUALAN</span><br>
                        <strong>RPL Book Store</strong></span><br>
                    <span class="style6"><strong>Alamat : </strong>Alamat : Jl. Nyi Raja Permas, Blok C1 Psr. Anyar-Bogor</span>
                </td>
            </tr>
            <tr>
                <td colspan="4"><strong>No Faktur :</strong>{{$data['id']}} </td>
                <td colspan="3" align="right">{{$data['tanggal']}} ]</td>
            </tr>
            <tr>
                <td colspan="7"><strong>Kasir :</strong> Kasir</td>
            </tr>
            <tr>
                <th bgcolor="#F5F5F5">No</th>
                <th bgcolor="#F5F5F5">Judul Buku</th>
                <th bgcolor="#F5F5F5">Jumlah Beli</th>
                <th bgcolor="#F5F5F5">Harga Satuan</th>
                <th bgcolor="#F5F5F5">PPN</th>
                <th bgcolor="#F5F5F5">Diskon</th>
                <th bgcolor="#F5F5F5" align="right">Total</th>
            </tr>
            <tr>
                <td><strong>1</strong></td>
                <td><strong>{{$data['judul']}} </strong></td>
                <td><strong>{{$data['jumlah_beli']}} </strong></td>
                <td><strong>{{ $data['harga_jual']}}</strong></td>
                <td>{{$data['ppn']}}%</td>
                <td>{{$data['diskon']}}%</td>
                <td align="right"><strong>{{$data['total_harga']}}</strong></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><strong>Jumlah</strong></td>
                <td><strong>{{$data['jumlah_beli']}} buku</strong></td>
                <td colspan="3" align="right"><strong>Grand Total</strong></td>
                <td align="right"><strong>{{$data['total_harga']}}</strong></td>
            </tr>
            <tr>
                <td colspan="6" align="right"><strong>Bayar</strong></td>
                <td align="right"><strong>{{$data['bayar']}}</strong></td>
            </tr>
            <tr>

                <td colspan="6" align="right"><strong>Kembalian</strong></td>
                <td align="right"><strong>{{$data['kembalian']}}</strong></td>
            </tr>
        </tbody>
    </table>

</body>

</html>