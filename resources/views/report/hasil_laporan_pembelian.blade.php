<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 >Laporan Pembelian Tahun</h1>
    <table class="table table-striped">
        <thead>
          <tr  class="table-primary">
            <th> Nama </th>
            <th> No. Telp</th>
            <th> Banyak Pesanan </th>
            <th> Total </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($DaftarOrder as $order)
            <tr>
                <td> {{$order->nama}} </td>
                <td> {{$order->nohp}} </td>
                <td> {{$order->banyak_pesanan}} </td>
                <td> {{$order->total_pesanan}} </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
