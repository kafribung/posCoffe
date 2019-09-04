@extends('layouts.master')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endIf
<div class="main-content">
	<div class="container-fluid">
		<h3 class="page-title">Daftar Makanan</h3>
		<!-- Table -->
		<div class="row">

			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<div class="right">
							<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus activity-icon"></i></button>
						</div>
					</div>
					<div class="panel-body"> 
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Kode</th>
									<th>Gambar</th>
									<th>Nama</th>
									<th>Harga</th>
									<th>Jenis</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($datas as $data)
								<tr>
									<td>Mk</td>
									<td><img src="{{asset('images/'.$data->gambar)}}" alt="no image" width="100" height="100"></td>
									<td>{{$data->nama}}</td>
									<td>{{$data->harga}}</td>
									<td>{{$data->jenis}}</td>
									<td>
										<a href="/makanan/{{$data->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
										<span>|</span>
										<a href="/makanan/{{$data->id}}/delete"class="btn btn-danger btn-sm" onclick="return confirm('Hapus Data?')">Delete</a>
									</td>
								</tr>
								@endForeach

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>	


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Tambah Makanan</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!-- ISI MODAL -->
				<form action="/makanan/create" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-group">
						<label for="nama">Nama</label>
						<input name="nama" type="input" class="form-control" id="nama"  placeholder="Nama Makanan">
					</div>
					<div class="form-group">
						<label for="harga">Harga</label>
						<input name="harga" type="input" class="form-control" id="harga"  placeholder="Harga Makanan">
					</div>
					<div class="form-group form-check">
						<label for="stok">Jenis</label>
						<select name="jenis" id="" class="form-control">
							<option value="kopi">Kopi</option>
							<option value="regular">Regular</option>
							<option value="umum">Umum</option>
							<option value="lainnya">Lainnya</option>
						</select>
					</div>
					<div class="form-group form-check">
						<label class="custom-file-label" for="form-control">Gambar</label>
						<input name="gambar" type="file" class="custom-file-input" id="form-control">
					</div>
					<!-- END ISI MODAL -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button name="addMinuman" type="submit" class="btn btn-primary">Create</button>
				</div>
			</form>

		</div>
	</div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endSection