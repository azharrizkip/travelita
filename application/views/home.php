<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelita</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
<!-- for banner css files -->
<link rel="stylesheet" type="text/css" href="<?php echo URL_ASSETS;?>css/zoomslider.css" /><!--zoomslider css -->
<script type="text/javascript" src="<?php echo URL_ASSETS;?>js/modernizr-2.6.2.min.js"></script><!--modernizer css -->
<!-- //for banner css files -->
	
<link href="<?php echo URL_ASSETS;?>css/carousel.css" type="text/css" rel="stylesheet" media="all"><!--for team carousel css --> 
 
<link href="<?php echo URL_ASSETS;?>css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" /><!-- for portfolio lightninBox css -->

<!-- custom-theme css files -->
<link href="<?php echo URL_ASSETS;?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo URL_ASSETS;?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme css files-->

<!-- font-awesome-icons -->
<link href="<?php echo URL_ASSETS;?>css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->

<!-- googlefonts -->
<link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //googlefonts -->
<style type="text/css">
.faq {
    background: url(<?php echo URL_ASSETS;?>images/01.jpg) no-repeat 0px 0px;
    background-size: cover;
}
.banner-text{

}
</style>
</head>
<body>

<!--/main-header-->
<div id="demo-1" data-zs-src='["<?php echo URL_ASSETS;?>images/01.jpg", "<?php echo URL_ASSETS;?>images/02.jpg", "<?php echo URL_ASSETS;?>images/03.jpg", "<?php echo URL_ASSETS;?>images/04.jpg"]' data-zs-overlay="dots">
	<div class="demo-inner-content">
	
	<!--/banner-info-->
	   <div class="header">
			   <div class="header-main">
				 <div class="container">
				<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1><a href="#">&nbspTrip<span>T r a v e l i t a</span></a></h1>
						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
									<li class="scroll hvr-outline-in"><a href="index.html">Home</a></li>
									<li><a class="scroll hvr-outline-in" href="#about">About</a></li>
									<li><a class="scroll hvr-outline-in" href="#services">Services</a></li>
									<li><a class="scroll hvr-outline-in" href="<?php echo base_url();?>Travelitacon/daftar">Daftar</a></li>
									<li><a class="scroll hvr-outline-in" href="<?php echo base_url();?>Travelitacon/login"><i class="fa fa-sign-in"></i> Masuk</a></li>
							  </ul>
							  
						</div>
						<div class="clearfix"> </div>	
					</nav>
				 <div class="clearfix"> </div>
			   </div>
			   </div>
		</div>
		<div class="w3-banner-head-info">
				<div class="container">
				   <div class="banner-text">
						<h2>Pesan Tiketmu Sekarang!</h2>
						<div class="book-form">
						   <form action="<?php echo base_url();?>Travelitacon/login" method="post">
								<div class="col-md-4 form-date-w3-agileits">
										<label><i class="fa fa-map-marker" aria-hidden="true"></i> Keberangkatan</label>
										<select class="form-control">
											<option>Jakarta</option>
											<option>Bali</option>
											<option>Yogyakarta</option>
											<option>Pontianak</option>
											<option>Sumatera</option>
										</select>
								</div>
								<div class="col-md-4 form-date-w3-agileits">
										<label><i class="fa fa-map-marker" aria-hidden="true"></i> Tujuan</label>
										<select class="form-control">
											<option>Jakarta</option>
											<option>Bali</option>
											<option>Yogyakarta</option>
											<option>Pontianak</option>
											<option>Sumatera</option>
										</select>
								</div>
								<div class="col-md-4 form-date-w3-agileits">
										<label><i class="fa fa-calendar" aria-hidden="true"></i> Pergi</label>
										<select class="form-control">
											<option>Jakarta</option>
											<option>Bali</option>
											<option>Yogyakarta</option>
											<option>Pontianak</option>
											<option>Sumatera</option>
										</select>
								</div>
								<div class="col-md-4 form-date-w3-agileits">
										<label><i class="fa fa-calendar" aria-hidden="true"></i> Pulang</label>
										<select class="form-control">
											<option>Jakarta</option>
											<option>Bali</option>
											<option>Yogyakarta</option>
											<option>Pontianak</option>
											<option>Sumatera</option>
										</select>
								</div>
								<div class="col-md-4 form-left-agileits-w3layouts ">
										<label><i class="fa fa-user" aria-hidden="true"></i> Orang</label>
										<select class="form-control">
											<option>Real estate</option>
											<option>Real Homes</option>
											<option>Apartments</option>
											<option>Real Flats</option>
										</select>
								</div>
								<div class="col-md-4 form-left-agileits-submit">
									  <input type="submit" value="Cari Penerbangan">
								</div>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
		</div>
			<!--/banner-info-->
	</div>
</div>
 <!--/banner-section-->

<!-- about section -->
<div class="about" id="about">
	<div class="container">
		<div class="about-top">
			<div class="col-md-4 text-center ">
				<h3>Who we are</h3>
			</div>	
			<div class="col-md-8 text">
				<p>Maecenas luctus odio est, sed ornare felis vestibulum sit amet. Morbi id eros metus. Vestibulum pulvinar leo a nibh
					commodo lobortis.</p>
			</div>	
			<div class="clearfix"></div>
		</div>	
		<div class="about-bottom-grid2">
			<div class="col-md-6 bottomgridimg">
				<img src="<?php echo URL_ASSETS;?>images/about2.jpg" alt="">
			</div>
			<div class="col-md-6 bottomgridtext bottomleft">
				<h3>Flat property value</h3>
				<span></span>
				<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore </p>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="about-bottom-grid1">
			<div class="col-md-6 bottomgridtext">
				<h3>Flat property value</h3>
				<span></span>
				<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore </p>
				<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
			</div>
			<div class="col-md-6 bottomgridimg">
				<img src="<?php echo URL_ASSETS;?>images/about1.jpg" alt="">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--// about -->

<!-- services -->
<div class="services" id="services">
<div class="banner-dott">
		<div class="heading">
			<h3>What we offer</h3>
			<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
		</div>
	<div class="container">
		<div class="services-top-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-home" aria-hidden="true"></i>
					<h4>Legal consultants</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-building" aria-hidden="true"></i>
					<h4>Building materials</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-money" aria-hidden="true"></i>
					<h4>quality roof</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="services-bottom-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-money" aria-hidden="true"></i>
					<h4>Heavy equipment</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-home" aria-hidden="true"></i>
					<h4>property strength</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-briefcase" aria-hidden="true"></i>
					<h4>Statistic value</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</div>
<!-- //services -->

<!-- Portfolio section -->
<section class="portfolio-agileinfo" id="properties">
		<div class="heading">
			<h3>Tujuan Favorit</h3>
		</div><br>
	<div class="gallery-grids">
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
					<div class="tab_img">
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/banner.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo URL_ASSETS;?>images/banner.jpg" class="img-responsive" alt="w3ls" />
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/banner1.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo URL_ASSETS;?>images/banner1.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/banner2.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo URL_ASSETS;?>images/banner2.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/banner3.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo URL_ASSETS;?>images/banner3.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab_img">
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/banner4.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo URL_ASSETS;?>images/banner4.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/banner5.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo URL_ASSETS;?>images/banner5.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b6.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo URL_ASSETS;?>images/b6.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b5.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo URL_ASSETS;?>images/b5.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b1.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo URL_ASSETS;?>images/b1.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b2.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo URL_ASSETS;?>images/b2.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b3.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo URL_ASSETS;?>images/b3.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b4.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo URL_ASSETS;?>images/b4.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="teach" aria-labelledby="teach-tab">
					<div class="tab_img">
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b1.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="2">
								<img src="<?php echo URL_ASSETS;?>images/b1.jpg" class="img-responsive zoom-img" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b2.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="2">
								<img src="<?php echo URL_ASSETS;?>images/b2.jpg" class="img-responsive zoom-img" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b3.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="2">
								<img src="<?php echo URL_ASSETS;?>images/b3.jpg" class="img-responsive zoom-img" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="train" aria-labelledby="train-tab">
					<div class="tab_img">
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b4.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="3">
								<img src="<?php echo URL_ASSETS;?>images/b4.jpg" class="img-responsive zoom-img" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b2.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="3">
								<img src="<?php echo URL_ASSETS;?>images/b2.jpg" class="img-responsive zoom-img" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="learn" aria-labelledby="learn-tab">
					<div class="tab_img">
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b1.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="4">
								<img src="<?php echo URL_ASSETS;?>images/b1.jpg" class="img-responsive zoom-img" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b2.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="4">
								<img src="<?php echo URL_ASSETS;?>images/b2.jpg" class="img-responsive zoom-img" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b3.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="4">
								<img src="<?php echo URL_ASSETS;?>images/b3.jpg" class="img-responsive zoom-img" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="award" aria-labelledby="award-tab">
					<div class="tab_img">
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b4.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="5">
								<img src="<?php echo URL_ASSETS;?>images/b4.jpg" class="img-responsive zoom-img" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b5.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="5">
								<img src="<?php echo URL_ASSETS;?>images/b5.jpg" class="img-responsive zoom-img" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b1.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="5">
								<img src="<?php echo URL_ASSETS;?>images/b1.jpg" class="img-responsive zoom-img" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo URL_ASSETS;?>images/b2.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="5">
								<img src="<?php echo URL_ASSETS;?>images/b2.jpg" class="img-responsive zoom-img" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5>Flat</h5>
									<p>Neque porro quisquam est.</p>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
				</div>
			</div>
		</div>
	</div>	
</section>
<!-- /Portfolio section -->	

<!-- Testimonials -->
<div class="customer" id="customer">
		<div class="heading">
			<h3>Testimonials</h3>
			<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
		</div>
	<div class="container">
			<div class="customer-grids">
				<ul id="flexiselDemo1">			
					<li>
						<div class="client-img">
							<img src="<?php echo URL_ASSETS;?>images/t1.jpg" alt="" />
						</div>
						<div class="customer-grid">
							<h4>David Elton</h4>
							<p> Cras aliquam ligula et netus et malesuada fames ac turpis egestas.  
								Donec auctorma gnaid purus lacinia hendrerit netus.</p>
						</div>
					</li>
					<li>
						<div class="client-img">
							<img src="<?php echo URL_ASSETS;?>images/t2.jpg" alt="" />
						</div>
						<div class="customer-grid">
							<h4>Helena Gaye</h4>
							<p> Cras aliquam ligula id felis rhoncus facilisis. fames ac turpis egestas.  
								Donec auctorma gnaid purus lacinia hendrerit felis.</p>
						</div>
					</li>
					<li>
						<div class="client-img">
							<img src="<?php echo URL_ASSETS;?>images/t3.jpg" alt="" />
						</div>
						<div class="customer-grid">
							<h4>Jawel Slash</h4>
							<p> Cras aliquam ligula id felis rhoncus facilisis. Pellentesque habitant 
								morbitristiquesen ectus et netus et malesuada fames.</p>
						</div>
					</li>
				</ul>
			</div>
	</div>
</div>
<!-- //Testimonials -->

<!-- faq's -->
<div class="faq">
	<div class="container">
		<div class="about-w3ls-row">
			<div class="heading ">
				<h3>Faq's</h3>
			</div>
			<div class="col-md-4 about-left">
				<div class="about-w3layouts-pic">
					<img src="<?php echo URL_ASSETS;?>images/faq1.png" alt=""/>	
				</div> 
			</div>
				<div class="col-md-8 about-right">
				<!-- history -->
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title asd">
									<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> How to Start your business? 
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body panel_text">
									Sed lectus tellus sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget leo sodales adipiscing.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> How to Plan your future with buildings?
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body panel_text">
									Feugiat porttitor nulla Sed lectus tellus sodales id elit a,  Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget leo sodales adipiscing.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
							  <h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> Why we Create real estate?
								</a>
							  </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body panel_text">
									Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget leo sodales adipiscing. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. 
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
							  <h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> why we choose to Enjoy housing boards ?
								</a>
							  </h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
								<div class="panel-body panel_text">
									Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget leo sodales adipiscing.
								</div>
							</div>
						</div>
					</div>
					<!-- //history --> 
				</div>
				<div class="clearfix"> </div> 
		</div>
	</div>
</div>
<!-- //faq's -->

<!-- footer -->
<div class="footer">
		<div class="container">
			<div class="social">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
				</ul>
			</div>
			<div class="border"></div>
		</div>
	</div>
<!-- //footer -->

 
<!-- js -->
<script type="text/javascript" src="<?php echo URL_ASSETS;?>js/jquery-2.1.4.min.js"></script>
<!-- for bootstrap working -->
	<script src="<?php echo URL_ASSETS;?>js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- //js -->
	

<!-- for banner js file-->
 <script type="text/javascript" src="<?php echo URL_ASSETS;?>js/jquery.zoomslider.min.js"></script><!-- zoomslider js -->
<!-- //for banner js file-->

<!-- for team slider -->
<!-- requried-jsfiles-for owl -->
		 <script src="js/owl.carousel.js"></script>
			<script>
			 $(document).ready(function() {
					$("#owl-demo").owlCarousel({
						 items : 4,
						 lazyLoad : true,
						 autoPlay : true,
							navigation : true,
							navigationText :  true,
							pagination : false,
							});
				});
			</script>
<!-- //requried-jsfiles-for owl -->
<!-- //for team slider -->

<!-- js for portfolio lightbox -->
<script src="<?php echo URL_ASSETS;?>js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio lightbox -->

<!-- for smooth scrolling -->
<script src="<?php echo URL_ASSETS;?>js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_ASSETS;?>js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo URL_ASSETS;?>js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- //for smooth scrolling -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

<!-- testimonilas slider -->
				<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
<script type="text/javascript" src="<?php echo URL_ASSETS;?>js/jquery.flexisel.js"></script>
<!-- testimonilas slider -->

</body>
</html>