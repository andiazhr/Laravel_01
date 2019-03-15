<html>
<body>
@extends('Layouts.master')
@section('content')
    <section class="content-header">
      <h1>
        Form Kategori Film
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('kategori') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('kategori/create') }}">Tambah</a></li>
        <li class="active">Kategori Film</li>
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
              <h3 class="box-title">Tambah Kategori Film</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('kategori.store') }}">
              <div class="box-body">
                <div class="form-group">
                @csrf
                  <label>Nama Kategori</label>
                  <input type="text" class="form-control" name="nama_kategori" placeholder="Masukkan Nama Kategori">
                </div>
                <div class="form-group">
                  <label>Slug</label>
                  <input maxlength="150" type="text" class="form-control" name="slug" placeholder="Masukkan Slug">
                </div>
                <div class="form-group">
                <label>Tanggal Input Data</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggal_input_data_kategori" class="form-control pull-right" id="from-datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ url('kategori') }}" class="btn btn-default">Back</a>
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