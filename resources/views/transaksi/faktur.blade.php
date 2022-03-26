<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css') }}/bootstrap.min.css"> --}}

    <title>Faktur</title>
</head>
<body>
    @foreach ($detail_transaksi as $d)
    <div class="row" style="font-size:11">
    <b>________________________________________________________________________________________________</b>
    <h3 style="text-align:left">FAKTUR <b style="float: right" line-height: 0.5em>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        PT.&nbsp;{{ $d->paket->outlet->nama }}
        <br>
        <small> {{ $d->paket->outlet->alamat  }}</small>
        </b>
   </h3>
    <p class="my-auto" style="line-height: 0.2em">________________________________________________________________________________________________</p>
    <p class="my-auto" style="line-height: 0.5em">Nomor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{ $d->transaksi->kode_invoice }}</p>
    <p class="my-auto" style="line-height: 0.5em">No.Telp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{ $d->paket->outlet->tlp }}</p>
    <p class="my-auto" style="line-height: 0.5em" >Customer&nbsp;:</p>
    <p class="my-auto" style="line-height: 0.5em" >Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $d->transaksi->member->nama }}</p>
    <p class="my-auto" style="line-height: 0.5em" >Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $d->transaksi->member->alamat }}</p>
    <p class="my-auto" style="line-height: 0.5em">No.Telp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $d->transaksi->member->tlp }}</p>
    <table border="1" cellspacing="0" style="width:100%">
        <tbody style="text-align: center">
            <tr>
                <td>No</td>
                <td>Nama Paket</td>
                <td>Jumlah Paket</td>
                <td>Harga Paket</td>
            </tr>
            <tr>
                <td width="5%">{{ $i=(isset($i)?++$i:$i=1) }}</td>
                <td>{{ $d->paket->nama_paket }}</td>
                <td width="15%">{{ $d->qty }}</td>
                <td>{{ $d->paket->harga }}</td>
                   
            </tr>
             @endforeach
            <tr>
                <td colspan="3" style="text-align: left"><b style="padding-right: 6">Total Awal</b></td>
                 <td>{{ $d->transaksi->subtotal }}</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: left">Diskon</td>
                    <td>{{ $d->transaksi->diskon }}%</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: left">Pajak</td>
                     <td>{{ $d->transaksi->pajak }}%</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: left">Biaya Tambahan</td>
                <td>{{ $d->transaksi->biaya_tambahan }}</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right"><b style="padding-right: 6">Total Akhir</b></td>
                       <td>{{ $d->transaksi->total }}</td>
            </tr>

        </tbody>
    </table>
    <br>
    <p style="text-align: right; line-height: 0.5em">PT.&nbsp;{{ $d->paket->outlet->nama }}</p>
    <br><br>
    <p style="text-align: right; line-height: 0.5em">(&nbsp;Finance Manager&nbsp;)</p>
   
    </div>
</body>
</html>