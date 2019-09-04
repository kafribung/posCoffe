@extends('layouts.master')
@section('content')

<div id="anlisa" class="main-content">
	<div class="container-fluid">
		<h3 class="page-title">Laporan</h3>
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Laporan Keuangan</h3>
						</div>
						<div class="panel-body"> 
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="datepicker" data-date-format="yyyy-mm-dd">

								<a @click="tampil(document.getElementById('datepicker').value)"  name="cariTanggal" class="btn btn-info btn-sm">Cari</a> 
							</div>
							<form>
								<div class="form-group">
									<table class="table table-condensed">
										<thead class="thead-dark">
											<tr>
												<th>Tanggal</th>
												<th>Laporan Keuangan</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>@{{data.tanggal}}</td>
												<td>@{{data.masuk}}</td>
											</tr>
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
</div>
@endSection

@section('js')
<script>
	let acc = new Vue({
		el:"#anlisa", 
		data(){
			return {
				data:{}
			}
		},
		methods:{
			tampil(tanggal){
				axios.get('/api/tanggalAnalisa/'+tanggal).then(({data})=>{this.data = data;})
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
