@extends('Layouts.master')
@section('content')
<section class="content-header">
      <h1>
        Transaksi Peminjaman Tables
        <small>Index</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Transaksi Peminjaman</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-header">
              <h3 class="box-title">Transaksi Peminjaman</h3>

              <div class="box-tools">
              <form action="{{ url()->current() }}">
                <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" name="transaksi" class="form-control pull-right" placeholder="Search Kategori">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table class="table table-hover">
                <tr>
                    <th>Id Transaksi</th>
                    <th>Id Film</th>
                    <th>Nama Peminjam</th>
                    <th>No KTP</th>
                    <th>Foto KTP</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Harga Sewa</th>
                    <th>Status</th>
                    <th>Tanggal Input Data</th>
                    <th>Aksi</th>
                </tr>
                @foreach($transaksi as $rental)
                    <tr>
                        <td>{{$rental->id_transaksi_peminjaman}}</td>
                        <td>{{$rental->id_film}}</td>
                        <td>{{$rental->nama_peminjam}}</td>
                        <td>{{$rental->no_ktp}}</td>
                        <td>{{$rental->foto_ktp}}</td>
                        <td>{{$rental->tanggal_pinjam}}</td>
                        <td>{{$rental->tanggal_kembali}}</td>
                        <td>{{$rental->harga_sewa}}</td>
                        <td>{{$rental->status}}</td>
                        <td>{{$rental->tanggal_input_data_peminjaman}}</td>
                        <td></td>
                    </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
    </section>
@endsection