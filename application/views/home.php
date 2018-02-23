<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travelita</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo URL_ASSETS;?>front/js/modernizr-2.6.2.min.js"></script>
  <!-- Font Awesome -->
  
    <link rel="stylesheet" href="<?php echo URL_ASSETS;?>admin/bower_components/select2/dist/css/select2.min.css">
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style type="text/css">
.row-mt-10em {
    margin-top: 9em;
  }
@media screen and (max-width: 768px) {
  .row-mt-10em {
    margin-top: 5em;
    text-align: center;
  }
}
#gtco-header .mt-text {
  margin-top: 8em;
}
@media screen and (max-width: 768px) {
  #gtco-header .mt-text {
    margin-top: 0;
  }
}
select{
    background-color: black;
}
.select2{
  display: block;
  width: 100%;
  font-size: 14px;
  line-height: 1.42857143;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  box-shadow: none;
  background: transparent;
  border: 2px solid rgba(0, 0, 0, 0.1);
  height: 46px;
  font-size: 16px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.select2:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
          box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
}
.select2-container--default .select2-selection--single {
    border: none;
    background-color: transparent;
    height: 45px;
    padding-top: 5px;
    color: #555;
}



</style>
	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="<?php echo base_url(); ?>travelitacon/index">Travelita	 <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="<?php echo base_url();?>Travelitacon">Home</a></li>
						<li><a href="<?php echo base_url();?>Travelitacon/daftar">Register</a></li>
						<li><a href="<?php echo base_url();?>Travelitacon/login">Login</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(<?php echo URL_ASSETS;?>front/images/2.jpg); background-size: cover;">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-10em">
						<div class="col-md-6 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 style="font-family: "Lato", Arial, sans-serif;">Liburan kemanapun dan Kapanpun<em>!</em></h1>	
						</div>
						<div class="col-md-6 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3><center>Pesan Tiketmu</center></h3>
											<form action="<?php echo base_url();?>Travelitacon/cari" method="get">
												<div class="row form-group">
													<div class="col-md-6 col-sm-12">
														<label for="destination">Keberangkatan</label>
														<select name="rute_form" style="background-color: black; color: red; padding-top: 20px;" id="rute_form" class="form-control select2">
															<?php $no=0; foreach($data_kota as $row) { $no++ ?>
                  											<option><?php echo $row['kota']?></option>
                  											<?php } ?>
														</select>
													</div>
													<div class="col-md-6 col-sm-12">
														<label for="destination">Tujuan</label>
														<select name="rute_to" id="rute_to" class="form-control select2">
															<?php $no=0; foreach($data_kota as $row) { $no++ ?>
                  											<option><?php echo $row['kota']?></option>
                  											<?php } ?>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Tanggal</label>
														<input type="text" id="date-start" name="tanggal" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="people">Penumpang</label>
														<select class="form-control" name="penumpang">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</div>
												</div>


												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Cari">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Tujuan Favorit</h2>
					<p>Tempat-tempat Favorit untuk liburan kamu selanjutnya</p>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="<?php echo URL_ASSETS;?>front/images/3.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?php echo URL_ASSETS;?>front/images/3.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Danau Toba, Jawa Barat</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="<?php echo URL_ASSETS;?>front/images/4.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?php echo URL_ASSETS;?>front/images/4.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Gunung Bromo, Jawa Barat</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="<?php echo URL_ASSETS;?>front/images/5.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?php echo URL_ASSETS;?>front/images/5.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Tanah Lot, Bali</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Tahapan Pemesanan</h2>
					<p>3 langkah mudah memesan tiket pesawat dengan TRAVELITA.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h3>Cari Penerbangan</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h3>Masukkan Data Pribadi</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h3>Verifikasi Pemesanan</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				

			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">

			<div class="row row-p">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2018 Travelita. Flight booking.</small> 
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo URL_ASSETS;?>front/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo URL_ASSETS;?>front/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo URL_ASSETS;?>front/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo URL_ASSETS;?>front/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?php echo URL_ASSETS;?>front/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?php echo URL_ASSETS;?>front/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="<?php echo URL_ASSETS;?>front/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="<?php echo URL_ASSETS;?>front/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo URL_ASSETS;?>front/js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="<?php echo URL_ASSETS;?>front/js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="<?php echo URL_ASSETS;?>front/js/main.js"></script>
<script src="<?php echo URL_ASSETS;?>admin/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy

  })
</script>
	</body>
</html>

