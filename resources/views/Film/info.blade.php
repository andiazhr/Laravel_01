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
        <li>Info</li>
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
              <h3 class="box-title">Informasi Film</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
              <div class="form-group">
                <label>Kategori Film</label>
                <select name="id_kategori_film" class="form-control select2" multiple="multiple" data-placeholder="Pilih Kategori Film"
                        style="width: 100%;" disabled>
                @foreach($kategori_film as $kafil)
                  <option value="{{$kafil->id_kategori_film}}" disabled>{{$kafil->nama_kategori}}</option>
                @endforeach
                </select>
              </div>
                <div class="form-group">
                  <label>Judul Film</label>
                  <input type="text" class="form-control" name="judul_film" value="{{ $movie->judul_film }}" disabled>
                </div>
                <div class="form-group">
                  <label>Sutradara</label>
                  <input type="text" class="form-control" name="sutradara" value="{{ $movie->sutradara }}" disabled>
                </div>

                <div class="form-group">
                  <label>Tahun Rilis</label>
                  <input type="text" class="form-control" name="tahun_rilis" value="{{ $movie->tahun_rilis }}" disabled>
                </div>
                <div class="form-group">
                  <label>Sinopsis</label>
                  <textarea type="text" class="form-control" name="sinopsis" disabled>{{ $movie->sinopsis }}</textarea>
                </div>
                <div class="form-group">
                <label>Tanggal Input Data</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggal_input_data_film" class="form-control pull-right" id="from-datepicker" value="{{ $movie->tanggal_input_data_film }}" disabled>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ url('film') }}" class="btn btn-default">Back</a>
              </div>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
  @endsection

</body>
</html>