<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, td, th {
          border: 1px solid black;
        }

        table {
          width: 80%;
          border-collapse: collapse;
        }
        td {
            text-align: center;
        }
        th, td {
            padding: 10px;
        }
        tr:nth-child(even) {background-color: #a5a5a5;}
        th {
            background-color: #34c5f1;
            color: rgb(0, 0, 0);
        }
        </style>
</head>
<body>
    <div>
        <h1 >Laporan Pembelian Tahun</h1>
        <table class="table table-striped">
            <thead>
            <tr  class="table-primary">
                <th> Nama Customer</th>
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
    </div>
</body>
</html>
