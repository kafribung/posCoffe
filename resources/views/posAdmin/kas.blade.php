@extends('layouts.master')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endIf
<div class="main-content">
	<div class="container-fluid">
		<h3 class="page-title">Kas</h3>
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Laporan Kas {{date('Y-m-d')}}</h3>
						</div>
						<div class="panel-body">
							<div class="row ">
								<div class="col-md-8 col-md-offset-2">
									<form action="/kas/create" method="POST">
										{{csrf_field()}}
										<div class="form-group">
											<label for="kas">Kas Sekarang: </label>
											<label id="kas">{{$tot}}</label>
											<br>
											<label for="kasKecil">Kas Kecil: </label>
											<input name="kasKecil" type="text" class="form-control" id="kasKecil" placeholder="masukkan kas kecil" autocomplete="off">
											<br>
											<button name="createKas" type="submit" class="btn btn-primary btn-sm">Tambah</button>
										</div>
										<div class="form-group">
											<h4 class="badge" style="display: block;">Kas Bank</h4>
											<center>
												<h2>{{$kas}}</h2>
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
</div>
@endSection