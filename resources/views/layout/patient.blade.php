@extends('layout/master')
@section('content')

<body>
  <div class="container">
    <h1>
        Tabel Pasien
      </h1>
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">pasien</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="/admin/form_patient">Tambah Baru</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Keterangan</th>
                    <th colspan="2">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $i=1; @endphp
                  @foreach($patient as $p)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->notelp }}</td>
                    <td>{{ $p->keterangan }}</td>
                    <td><a href="#"><span class="label label-danger text-white">Hapus</span></a>
                        <a href="#"><span class="label label-warning text-white">Edit</span></a></td>
                  </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="#" class="btn btn-sm btn-info btn-flat pull-right">Tambah</a>
            </div>
            <!-- /.box-footer -->
          </div>
  </div>

</body>
@stop