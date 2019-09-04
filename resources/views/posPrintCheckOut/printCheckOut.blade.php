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
    <style>
        body {
          width: 100%;
        }
    </style>

</head>
<body>
    <!-- header -->
    <div class="container header">
        <div class="row">
            <div class="col-sm-4">
                <h4><strong>KOKAS</strong></h4>
                <h5><b>Jl.Kapasa Raya No.13 AB</b></h5>
                <h6>0811-4638-489 KodePos 90241</h6> 
                <hr style="border: 1px dashed black">            
            </div>
        </div>
    </div>
    <!-- akhir header -->

    <!-- isi -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 judul">
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
                        <td><h6>: {{date('m-d-Y')}}</h6></td>
                    </tr>
                    <tr>
                        <td><h6>Tampat</h6></td>
                        <td><h6>: {{$datas->tempat}}</h6></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <span>------------------</span>
                <h6>Makanan</h6>
                <ul type="disk">
                    <?php $totalMinuman=0;$totalMakanan=0;$total=0; ?>
                    
                        @foreach($datas->makanan as $makanan) 
                        <li>
                        {{$makanan->nama}} ({{ $totalMakanan+=$makanan->harga}})
                    </li>

                        @endForeach
                </ul>
                <span>------------------</span>
                <h6>Minuman</h6>
                <ul type="disk">
                    @foreach($datas->Minuman as $minuman) 
                        <li>
                            {{$minuman->nama}} ({{$totalMinuman+=$minuman->harga}})
                        </li>
                     @endForeach
                </ul> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h6>Total</h6>
            </div>
            <div class="col-sm-4">
                <h6>Rp.<?= $total=$totalMinuman+$totalMakanan?></h6>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <hr style="border: 1px dashed black"> 
                <h5>Terima Kasih</h5>
                <h6>Jangan lupa kembali</h6>
                <hr style="border: 1px dashed black">
            </div>
        </div>

    </body>
    </html>