@extends('layouts.master')

@section('content')

<div id="terjual" class="main-content">
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
												<td> {{date_format($data->updated_at,"D, d-m-Y / H:i:s"  )}}</td>
												<td>{{$data->nama}}</td>
												<td>
													@foreach($data->makanan as $makanan) 
													{{$makanan->nama}} {{$makanan->harga}},
													@endForeach
												</td>
												<td>
													@foreach($data->Minuman as $minuman) 
													{{$minuman->nama}} {{$minuman->harga}},
													@endForeach
												</td>
												<td>{{$data->total}}</td>
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