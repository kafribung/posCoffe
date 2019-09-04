<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				@guest
				<li><a href="#" class="active"><i class="lnr lnr-home"></i> <span>ADMIN</span></li></a>
				@else
				<li><a href="#" class="active"><i class="lnr lnr-home"></i> <span>{{Auth::User()->name}}</span></a></li>
				@if(Auth::User()->type == 'admin')
				<li><a href="{{url('manajemen')}}"><i class="lnr lnr-user"></i> <span>Manajemen</span></a></li>
				<li>
					<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-pencil"></i> <span>Barang</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
					<div id="subPages" class="collapse ">
						<ul class="nav">
							<li><a href="{{url('makanan')}}" class="">Makanan</a></li>
							<li><a href="{{url('minuman')}}" class="">Minuman</a></li>
						</ul>
					</div>
				</li>
				<li><a href="{{url('stok')}}" class=""><i class="fa fa-line-chart"></i> <span>Stok</span></a></li>
				<li><a href="{{url('kas')}}" class=""><i class="lnr lnr-inbox"></i> <span>Kas</span></a></li>
				<li><a href="{{url('laporan')}}" class=""><i class="lnr lnr-sort-amount-asc"></i> <span>Laporan</span></a></li>
				@else
				<li><a href="{{url('pesanan')}}" class=""><i class="lnr lnr-book"></i> <span>Kasir</span></a></li>
				<li><a href="{{url('checkout')}}" class=""><i class="lnr lnr-cart"></i> <span>Data Pemesan</span></a></li>
				<li><a href="{{url('terjual')}}" class=""><i class="lnr lnr-chart-bars"></i> <span>Laporan Penjualan</span></a></li>
				<li><a href="{{url('pengeluaran')}}" class=""><i class="lnr lnr lnr-rocket"></i> <span>Pengeluaran</span></a></li>
				@endif
				@endguest			
			</ul>
		</nav>
	</div>
</div>