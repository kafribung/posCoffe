@extends('layouts.master')

@section('content')
<div class="main-content">
	<div class="container-fluid">
		<h3 class="page-title">Manajemen</h3>
		<!-- Table -->
		<div class="row">

			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<h3>Edit User</h3>
					</div>
					<div class="panel-body">
						<div class="modal-body">
							<form action="/manajemen/{{$datas->id}}/update" method="POST" enctype="multipart/form-data">
								{{csrf_field()}}  {{method_field('PUT')}}

								<div class="form-group">
									<label for="username">Username</label>
									<input name="username" type="input" class="form-control" id="username"  placeholder="Username" value="{{$datas->name}}">
								</div>
								<div class="form-group">
									<label for="email">Email address</label>
									<input name="email" type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" value="{{$datas->email}}">
								</div>
								<div class="form-group">
									<label for="username">Password</label>
									<input name="password" type="input" class="form-control" id="username"  placeholder="rahasiakan" value="{{$datas->password}}">
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