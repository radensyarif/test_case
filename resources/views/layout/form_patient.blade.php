@extends('layout/master')
@section('content')

<body>
  <div class="container">
    <h1>
        Form Pasien
      </h1>
    <!-- quick email widget -->
    <div class="box box-info">
      <div class="box-header">
        <i class="fa fa-clipboard"></i>

        <h3 class="box-title">Form Pasien</h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <div class="btn-group">
            <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bars"></i></button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="#">Tambah Baru</a></li>
            </ul>
          </div>
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
        <!-- /. tools -->
      </div>
      <div class="box-body">
        <form action="#" method="post">
          <div class="form-group">
            <select class="form-control">
                <option>Poli Gigi</option>
                <option>Poli Anak</option>
                <option>Poli Hidung</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control">
                <option>Pasien Lama</option>
                <option>Pasien Baru</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="notelp" placeholder="No Telepon">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="ket" placeholder="Keterangan">
          </div>
        </form>
      </div>
      <div class="box-footer clearfix">
        <button type="button" class="pull-right btn btn-primary" id="sendEmail">Tambah 
          <i class="fa fa-arrow-circle-right"></i></button>
      </div>
    </div>
  </div>

</body>
@stop