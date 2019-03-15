<html>
<body>
@extends('Layouts.master')
@section('content')
    <section class="content-header">
      <h1>
        Form Film
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('film') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('film/create') }}">Tambah</a></li>
        <li class="active">Film</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Film</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('film.store') }}">
              <div class="box-body">
              <div class="form-group">
                <label>Kategori Film</label>
                <select class="form-control select2" name="id_kategori_film" multiple="multiple" data-placeholder="Pilih Kategori Film"
                        style="width: 100%;">
                @foreach($kategori_film as $kafil)
                  <option value="{{$kafil->id_kategori_film}}">{{$kafil->nama_kategori}}</option>
                @endforeach
                </select>
              </div>
                <div class="form-group">
                @csrf
                  <label>Judul Film</label>
                  <input type="text" class="form-control" name="judul_film" placeholder="Masukkan Judul Film">
                </div>
                <div class="form-group">
                  <label>Sutradara</label>
                  <input type="text" class="form-control" name="sutradara" placeholder="Masukkan Sutradara">
                </div>
                <div class="form-group">
                  <label>Tahun Rilis</label>
                  <input type="number" class="form-control" name="tahun_rilis" placeholder="Masukkan Tahun Rilis">
                </div>

                <div class="form-group">
                  <label>Sinopsis</label>
                  <input type="text" class="form-control" name="sinopsis" placeholder="Masukkan Sinopsis">
                </div>
                <div class="form-group">
                <label>Tanggal Input Data</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggal_input_data_film" class="form-control pull-right" id="from-datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ url('film') }}" class="btn btn-default">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
  @endsection

</body>
</html>