@extends('layouts.master')

@section('content')
<div id="be" class="main-content">
	<div class="container-fluid">
		<h3 class="page-title">Pemgeluaran</h3>

		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
					</div>
					<div class="panel-body"> 
						<form action="/pengeluaran/create" method="POST">
							<div class="form-group">
								{{csrf_field()}}
								<label for="deskripsi">Deskripsi</label>
								<input name="deskripsi" type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" autocomplete="off">
								<label for="jumlah">Jumlah</label>
								<input name="jumlah" type="text" class="form-control" id="jumlah" placeholder="jumlah" autocomplete="off">
								<label for="harga">Harga</label>
								<input name="harga" type="text" class="form-control" id="harga"placeholder="harga" autocomplete="off">
								<br>
								<button name="createPengeluaran" type="submit" class="btn btn-primary btn-sm">Tambah</button>
								<h4 class="badge" style="display: block;">Cek Pengeluaran</h4>
								<label style="display: block;" for="tanggal">Tanggal</label>
								<!-- DatePicker -->
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="datepicker" data-date-format="yyyy-mm-dd">

									<a @click="tampil(document.getElementById('datepicker').value)"  name="cariTanggal" class="btn btn-info btn-sm">Cari</a> 
								</div>
							</div>
							<div class="form-group">
								
								<table class="table table-bordered">
									<thead class="thead-dark">
										<tr>
											
											<th>Deskripsi</th>
											<th>Jumlah</th>
											<th>Harga</th>
										</tr>
									</thead>
									<tbody>
										<tr v-for ="item in data" :key="item.id">
											<td>@{{item.deskripsi}}</td>
											<td>@{{item.jumlah}}</td>
											<td>@{{item.harga}}</td>
										</tr>
									</tbody>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endSection

	@section('js')


	<script>
		let acc = new Vue({
			el:"#be", 
			data(){
				return {
					data:{}
				}
			},
			methods:{
				tampil(tanggal){
					axios.get('/api/tanggal/'+tanggal).then(({data})=>this.data = data)
				}
			}
		})	
	</script>

	<script>
  //Date picker
  $('#datepicker').datepicker({
  	autoclose: true
  })
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    	checkboxClass: 'icheckbox_minimal-blue',
    	radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    	checkboxClass: 'icheckbox_minimal-red',
    	radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    	checkboxClass: 'icheckbox_flat-green',
    	radioClass   : 'iradio_flat-green'
    })

</script>
@stop
