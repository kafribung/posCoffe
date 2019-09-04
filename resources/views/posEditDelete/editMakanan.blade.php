@extends('layouts.master')

@section('content')
<div class="main-content">
	<div class="container-fluid">
		<h3 class="page-title">Daftar Makanan</h3>
		<!-- Table -->
		<div class="row">

			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<h3>Edit Data Makanan</h3>
					</div>
					<div class="panel-body">
						<div class="modal-body">
							<form action="/makanan/{{$datas->id}}/update" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							
								<div class="form-group">
									<label for="nama">Nama</label>
									<input name="nama" type="input" class="form-control" id="nama"  placeholder="Nama Makanan" value="{{$datas -> nama}}">
								</div>
								<div class="form-group">
									<label for="harga">Harga</label>
									<input name="harga" type="input" class="form-control" id="harga"  placeholder="Harga Makanan" value="{{$datas -> harga}}">
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
									<input name="gambar" type="file" class="custom-file-input" id="form-control" value="ayam">
									<img src="{{asset('images/'.$datas->gambar)}}" width="100" height="100">
								</div>
								<!-- END ISI MODAL -->
							</div>
							<div class="modal-footer">
								<button name="updateMakanan" type="submit" class="btn btn-warning">Update</button>
							</div>
						</form>

					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>



@endSection