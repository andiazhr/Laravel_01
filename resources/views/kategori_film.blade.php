<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Profil</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/lightbox/simpleLightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/animate-css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/flaticon/flaticon.css') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('assets/img/andiazhr.jpg') }}" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="{{ url('kategori_film') }}">Kategori Film</a></li> 
								<li class="nav-item"><a class="nav-link" href="{{ url('film') }}">Film</a>
								<li class="nav-item"><a class="nav-link" href="{{ url('transaksi_peminjaman') }}">Transaksi Peminjaman</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
				<div class="container">
					<div class="row">

						<div class="col-lg-12" style="margin:100px 0 60px 0">    
							<div class="banner_content">
                                <h2>Kategori Film</h2>
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Id Kategori</th>
                                        <th>Nama Kategori</th>
                                        <th>Deskripsi</th>
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
								<a class="banner_btn" href="{{ url('/') }}">&#11164; Kembali</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/stellar.js') }}"></script>
        <script src="{{ asset('assets/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/isotope/isotope-min.js') }}"></script>
        <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/counter-up/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/mail-script.js') }}"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{ asset('assets/js/gmaps.min.js') }}"></script>
        <script src="{{ asset('assets/js/theme.js') }}"></script>
    </body>
</html>