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
    @if(session()->get('success'))
              <div class="alert alert-success">
                {{ session()->get('success') }}  
              </div>
      @endif
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-header">
              <h3 class="box-title" style="margin: 0 20px 0 0">Film</h3>
              <a href="{{ url('film/create') }}" class="btn btn-primary">+ &nbsp;Tambah Data</a>
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
                  <th>Edit</th>
                  <th>Delete</th>
                  <th>Info</th>
                </tr>
                @foreach($movie as $nomor => $film)
                    <tr>
                        <td>{{$nomor +1}}</td>
                        <td>{{$film->id_kategori_film}}</td>
                        <td>{{$film->judul_film}}</td>
                        <td>{{$film->sutradara}}</td>
                        <td>{{$film->tahun_rilis}}</td>
                        <td>{{$film->sinopsis}}</td>
                        <td>{{$film->tanggal_input_data_film}}</td>
                        <td>
                            <a href="{{ route('film.edit',$film->id_film)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        </td>
                        <td>
                          <form action="{{ route('film.destroy', $film->id_film)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>
                        <td>
                          <a href="{{ route('film.show',$film->id_film)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
                        </td>
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