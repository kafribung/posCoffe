@extends('layouts.master')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endIf

@if(Auth::User()->type == 'admin')
<div class="main-content">
	<div class="container-fluid">
		<h3 class="page-title">Daftar Users</h3>
		<!-- Table -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">User Table</h3>
						<div class="right">
							<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus activity-icon"></i></button>
						</div>
					</div>
					<div class="panel-body"> 
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Username</th>
									<th>Email</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($datas as $data)
								<tr>									
									<td>{{$data -> name }}</td>
									<td>{{$data -> email}}</td>
									<td>
										<a href="/manajemen/{{$data->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
										<span>|</span>
										<a id="tombol" class="btn btn-danger btn-sm" onclick="swal.fire({title: 'Kamu setuju?',
											text: 'Hilang secara permanen!',
											type: 'Hati-hati',
											showCancelButton: true,
											confirmButtonColor: '#3085d6',
											cancelButtonColor: '#d33',
											confirmButtonText: 'Yes, delete it!'
										}).then((result) => {
											if (result.value) {
												Swal.fire(
													'Deleted!',
													'Your file has been deleted.',
													'success'
													)
												window.open('http://127.0.0.1:8000/manajemen/{{$data -> id}}/delete', '_self')
											}
										})" class="btn-danger btn-sm">Delete</a>
										
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<!-- ISI MODAL -->
				<form action="/manajemen/create" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="username">Username</label>
						<input name="username" type="input" class="form-control" id="username"  placeholder="Username">
					</div>
					<div class="form-group">
						<label for="email">Email address</label>
						<input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="username">Password</label>
						<input name="password" type="input" class="form-control" id="username"  placeholder="Password">
					</div>	

					<!-- END ISI MODAL -->
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button name="Kirim Submit" type="submit" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@else
<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<center>	
					<h1>Selamat Datang Di POINT OF SALE COFFE</h1>
					<h3>"{{Auth::User()->name}}"</h3>
				</center>
			</div>
		</div>
	</div>
</div>
@endIf
@endSection