 @extends("layout/admin") 
 @section('content')
 <div class="page-header">
    <div class="page-header-content">
        <div >
            <h4 class="">
                <i class="icon-home position-left"></i>
                <span class="text-semibold">Daftar Menu</span></h4>
            <a class="heading-elements-toggle">
                <i class="icon-more"></i>
            </a>
        </div>
        <div class="heading-elements">
            <ul class="breadcrumb position-right">
                <li>
                <a href="{{route('barang.index')}}">Home</a>
                </li>
                <li>
                <a href="">Daftar Menu</a>
                </li>
                <li class="active"></li>
            </ul>
        </div>
    </div>
    <!-- /header content -->
</div>
 <div class="container-fluid">
					<h3 class="page-title">Menu CafeStor</h3>
					<div id="toastr-demo" class="panel">
						<div class="panel-body">
						<dl class="row">
							<dt class="col-sm-3">Nama</dt>
							<dd class="col-sm-3">Arif Suryanto</dd>
						</dl>
						<dl class="row">
							<dt class="col-sm-3">NIM</dt>
							<dd class="col-sm-3">1815051042</dd>
						</dl>
						<dl class="row">
							<dt class="col-sm-3">Prodi</dt>
							<dd class="col-sm-3">Pendidikan teknik Informatika</dd>
						</dl>
						</div>

						<div id="toastr-demo" class="panel">
						<div class="panel-body">
					
							<h4>Studi Kasus</h4>
					
							<dl class="row">
								<dt class="col-sm-3"><b><h4>Judul</h4></b></dt>
								<dd class="col-sm-9"><h5>Sistem memejemen Cafe</h5></dd>
							</dl>
							<dl class="row">
								<dt class="col-sm-3"><b><h4>Penjelasan</h4></b></dt>
								<dd class="col-sm-5">Sistem ini berkejang dengan dua arah yakni dengan Kasir dan juga pada Juru masak sehingga  dapat
								memenejem waktu, dan dapat menjimpan data dengan akurat</dd>
							</dl>
							</div>
						</div>
					</div>
</div>
@endsection