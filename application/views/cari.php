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
  <title>Booking! Travelita</title>
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
  <link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/style2.css">

  <!-- Modernizr JS -->
  <script src="<?php echo URL_ASSETS;?>front/js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
<style type="text/css">
.gtco-cover.gtco-cover-sm {
  height: 300px;
}
@media screen and (max-width: 768px) {
  .gtco-cover.gtco-cover-sm {
    height: 300px;
  }
}

.gtco-nav{
  position: fixed;
  background-color: white;
}
.gtco-nav a {
  padding: 5px 10px;
  color: black;
}
.gtco-cover .row{
  margin-bottom: 50px;
}
.gtco-nav ul li a {
  font-size: 16px;
  padding: 30px 10px;
  color: black;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

</style>
  </head>
  <body>
    
  <div class="gtco-loader"></div>
  
  <div id="page">
  
  <!-- <div class="page-inner"> -->
  <nav class="gtco-nav" role="navigation">
    <div class="gtco-container-header">
      
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div id="gtco-logo"><a href="<?php echo base_url(); ?>travelitacon/index">Travelita <em>.</em></a></div>
        </div>
        <div class="col-xs-8 text-right menu-1">
          <ul>
            <li style="color: #09C6AB;"><b>Cari Penerbangan</b></li>
            <li style="padding-left: 20px;">Data Pribadi</li>
            <li style="padding-left: 20px;">Verifikasi</li>
          </ul> 
        </div>
      </div>
      
    </div>
  </nav>
  
  <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo URL_ASSETS;?>front/images/4.jpg); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-12 col-md-offset-0 text-left">
            <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
              <center><span class="intro-text-small">Travelita Flight</span>
              <h1 style="font-family: Comic Sans MS;">Penerbangan dari <?php echo $this->input->get('rute_form'); ?> ke <?php echo $this->input->get('rute_to'); ?></h1></center>  
            </div>
        </div>
      </div>
    </div>
  </header>
  
  
  <div class="gtco-section">
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
          <table id="example2" class="table table-striped table-hover">
                <thead>
                <tr>
                  <th><center>No.</center></th>
                  <th><center>Tanggal</center></th>
                  <th><center>Waktu Keberangkatan</center></th>
                  <th><center>Keberangkatan</center></th>
                  <th><center>Tujuan</center></th>
                  <th><center>Harga</center></th>
                  <!--<th><center>Total</center></th>-->
                  <th><center>Pesawat</center></th>
                  <th>&nbsp</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=0; foreach($data_rute as $row) { $no++ ?>
                <tr>
                  <td><center><?php echo $no; ?></center></td>
                  <td><center><?php echo $row['depart_date']; ?></center></td>
                  <td><center><?php echo $row['depart_at']; ?></center></td>
                  <td><center><?php echo $row['rute_form']; ?></center></td>
                  <td><center><?php echo $row['rute_to']; ?></center></td>
                  <td><center>Rp <?php echo number_format($row['price'],2); ?></center></td>
                 <!-- <td><center>Rp <//?php echo $row['price']*$this->input->post('people'); ?>,00</center></td>-->
                  <td><center><?php echo $row['plane_name']; ?></center></td>
                  <td><a href="<?php echo base_url(); ?>travelitacon/step1/<?php echo $row['id_rute'];?>/<?php echo $penumpang;?>" class="btn btn-primary">Pesan</a></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
              </div>
        </div>
      </div>
    </div>
  </div>
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

  </body>
</html>

