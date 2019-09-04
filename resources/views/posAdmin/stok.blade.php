@extends('layouts.master')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endIf

<div class="main-content">
	<div class="container-fluid">
		<h3 class="page-title">Stok</h3>
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Stok Persediaan</h3>
						</div>
						<div class="panel-body">
							<form action="/stok/create" method="POST">
								<div class="form-group">
									{{csrf_field()}}
									<label for="stok">Tambah Stok Kopi</label>
									<input name="stok" type="text" class="form-control" id="stok" placeholder="stok" autocomplete="off">
									<br>
									<button name="createStok" type="submit" class="btn btn-primary btn-sm">Tambah</button>
								</div>
								<div class="form-group">
									<h4 class="badge" style="display: block;">Stok Sekarang</h4>
									<center>
										<h3 style="font-weight: bold;" >{{$stoks}} gr</h3>
									</center>
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