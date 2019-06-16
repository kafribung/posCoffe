@extends('layouts.master')

@section('content')

<div class="main-content">
	<div class="container-fluid">
		<h3 class="page-title">Terjual</h3>

		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
					</div>
					<div class="panel-body"> 
						<form>
							<div class="form-group">
								<table class="table table-condensed">
									<thead class="thead-dark">
										<tr>
											<th>#</th>
											<th>Tanggal</th>
											<th>Pembeli</th>
											<th>Makanan</th>
											<th>Minuman</th>
											<th>Harga</th>
											<th>Tempat</th>
											
										</thead>
										<tbody>
											@foreach($datas as $data)
											<tr>
												<td>1</td>
												<td> {{date_format($data->updated_at,"D, d-m-Y / H:i:s"  )}}</td>
												<td>{{$data->nama}}</td>
												<?php $totalMinuman=0;$totalMakanan=0;$total=0; ?>
												<td>
													@foreach($data->makanan as $makanan) 
													{{$makanan->nama}} {{ $totalMakanan+=$makanan->harga}},
													@endForeach
												</td>
												<td>
													@foreach($data->Minuman as $minuman) 
													{{$minuman->nama}} {{$totalMinuman+=$minuman->harga}},
													@endForeach
												</td>
												<td><?= $total=$totalMinuman+$totalMakanan?></td>
												<td>{{$data->tempat}}</td>
											</tr>
											@endForeach
											{{ $datas->links()}}
										</tbody>
									</table>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




@endSection