<html>
<body>
@extends('Layouts.master')
@section('content')
<section class="content-header">
      <h1>
        Kategori Tables
        <small>Index</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Kategori</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-header">
              <h3 class="box-title">Kategori Film</h3>

              <div class="box-tools">
              <form action="{{ url()->current() }}">
                <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" id="myInput" onkeyup="myFunction()" name="kategori" class="form-control pull-right" placeholder="Search Kategori">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table id="myUL" class="table table-hover">
                <tr>
                  <th>Kode Kategori</th>
                  <th>Nama Kategori</th>
                  <th>Slug</th>
                  <th>Tanggal Input Data</th>
                  <th>Aksi</th>
                </tr>
                @foreach($kategori_film as $kafil)
                <tr>
                    <td>{{$kafil->id_kategori_film}}</td>
                    <td>{{$kafil->nama_kategori}}</td>
                    <td>{{$kafil->slug}}</td>
                    <td>{{$kafil->tanggal_input_data_kategori}}</td>
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

<!-- <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myUL");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script> -->

</body>
</html>