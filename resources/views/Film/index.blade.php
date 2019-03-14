@extends('Layouts.master')
@section('content')
<section class="content-header">
      <h1>
      Film Tables
        <small>Index</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Film</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-header">
              <h3 class="box-title">Film</h3>

              <div class="box-tools">
              <form action="{{ url()->current() }}">
                <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" name="film" class="form-control pull-right" placeholder="Search Kategori">

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
                  <th>Id Film</th>
                  <th>Kategori Film</th>
                  <th>Judul Film</th>
                  <th>Sutradara</th>
                  <th>Tahun Rilis</th>
                  <th>Sinopsis</th>
                  <th>Tanggal Input Data</th>
                  <th>Aksi</th>
                </tr>
                @foreach($movie as $film)
                    <tr>
                        <td>{{$film->id_film}}</td>
                        <td>{{$film->id_kategori_film}}</td>
                        <td>{{$film->judul_film}}</td>
                        <td>{{$film->sutradara}}</td>
                        <td>{{$film->tahun_rilis}}</td>
                        <td>{{$film->sinopsis}}</td>
                        <td>{{$film->tanggal_input_data_film}}</td>
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