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
               <a href="">Input Menu</a>
               </li>
               <li class="active"></li>
           </ul>
       </div>
   </div>
   <!-- /header content -->
</div>
<div class="container-fluid">
<h3 class="page-title">Input Menu</h3>
    <div id="toastr-demo" class="panel">
    <form action="{{(isset($barang))?route('barang.update',$barang->kode_item):route('barang.store')}}" method="POST">
        @csrf
        @if(isset($barang))?@method('PUT')@endif

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">

                    <!-- Horizontal form -->
                        <div class="card-body">
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" required="required">Nama Barang</label>
                                    <div class="col-lg-12">
                                    <input type="text"  value="{{(isset($barang))?$barang->nama_barang:old('nama_barang')}}" name="nama_barang" class="form-control">
                                    @error('nama_barang')<small style="color:red">{{$message}}</small>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" required="required">Jenis</label>
                                    <div class="col-lg-9">
                                        <select name="jenis" class="form-control">
                                            <option value="makanan">makanan</option>
                                            <option value="minuman">minuman</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label " required="required">Harga</label>
                                    <div class="col-lg-12">
                                        <input type="text" alue="{{(isset($barang))?$barang->harga:old('harga')}}"  name="harga" class="form-control">
                                        @error('harga')<small style="color:red">{{$message}}</small>@enderror
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">SIMPAN <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /horizotal form -->
                </div>
            </div>
    </form>
                </div>
            </div> 
        </div>
    </div>
@endsection