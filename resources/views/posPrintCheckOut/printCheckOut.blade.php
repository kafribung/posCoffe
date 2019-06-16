<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>

    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- style -->
    <link rel="stylesheet" href="{{asset('boostrap/css/style.css')}}">

</head>
<body>
    <!-- header -->
    <div class="container header">
        <div class="row">
            <div class="col-sm-4">
                <center><h4><strong>Friendstech COFFE</strong></h4></center>
                <center><h4><b>Jl.Cinta Rw.Rindu</b></h4></center>
                <center><h6>Telp. (0413) 81002 Kode Pos 92511</h6></center> 
                <hr style="border: 1px dashed black">            
            </div>
        </div>
    </div>
    <!-- akhir header -->

    <!-- isi -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 judul">
                <table>
                    <tr>
                        <td><h6><em>Kasir</em></h6></td>
                        <td><h6><em>: {{Auth::User()->name}}</em></h6></td>
                    </tr>
                    <tr>

                        <td><h6>Nama Pembeli</h6></td>
                        <td><h6>: {{$datas->nama}}</h6></td>
                    </tr>
                    <tr>
                        <td><h6>Tanggal/Waktu</h6></td>
                        <td><h6>: {{$datas->updated_at}}</h6></td>
                    </tr>
                    <tr>
                        <td><h6>Tampat</h6></td>
                        <td><h6>: {{$datas->tempat}}</h6></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <span>------------------</span>
                <h6>Makanan</h6>
                <ul type="disk">
                    <?php $totalMinuman=0;$totalMakanan=0;$total=0; ?>
                    <li>
                        @foreach($datas->makanan as $makanan) 
                        {{$makanan->nama}} ({{ $totalMakanan+=$makanan->harga}})
                        @endForeach
                    </li>
                </ul>
                <span>------------------</span>
                <h6>Minuman</h6>
                <ul type="disk">
                    <li>
                        @foreach($datas->Minuman as $minuman) 
                        {{$minuman->nama}} ({{$totalMinuman+=$minuman->harga}})
                        @endForeach
                    </li>
                </ul> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <h6>Total</h6>
            </div>
            <div class="col-sm-2">
                <h6>Rp.<?= $total=$totalMinuman+$totalMakanan?></h6>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <hr style="border: 1px dashed black"> 
                <center><h4>TERIMA KASIH</h4></center>
                <center><h6>Jangan Lupa Kembali</h6></center>

                <hr style="border: 1px dashed black"> 
            </div>
        </div>

    </body>
    </html>