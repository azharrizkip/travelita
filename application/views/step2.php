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
  <title>Book! Travelita</title>
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
  <link rel="stylesheet" href="<?php echo URL_ASSETS;?>admin/bower_components/font-awesome/css/font-awesome.min.css">
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
  <link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/style3.css">
  <link rel="stylesheet" href="<?php echo URL_ASSETS;?>admin/plugins/iCheck/all.css">

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
.gtco-contact-info ul li.plane:before {
  font-size: 30px;
  content: "\ea07";
}
.gtco-contact-info ul li.calendar:before {
  font-size: 30px;
  content: "\e979";
}
.gtco-contact-info ul li.clock:before {
  font-size: 30px;
  content: "\e014";
}
.gtco-contact-info ul li.pricetag:before {
  font-size: 30px;
  content: "\e9fb";
}
.gtco-contact-info ul li.seat:before {
  font-size: 30px;
  content: "\e9db";
}
.gtco-contact-info ul li.user:before {
  font-size: 30px;
  content: "\ea36";
}
.gtco-contact-info ul li.email:before {
  font-size: 30px;
  content: "\e99a";
}
.gtco-contact-info ul li.phone:before {
  font-size: 30px;
  content: "\e9f4";
}
.gtco-contact-info ul li.gender:before {
  font-size: 30px;
  content: "\e9db";
}
.gtco-contact-info ul li.code:before {
  font-size: 30px;
  content: "\e986";
}
.seat li{
  display: inline;
  padding-left: 5px;
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
                <li>Cari Penerbangan</li>
                <li style="padding-left: 20px; color: #09C6AB;"><b>Data Pribadi</b></li>
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
                <center><span class="intro-text-small">Travelita Flight</span><br>
                  <h1 style="font-family: Comic Sans MS; font-size: 35px;"><?php echo $rute_form;?> <i class="fa fa-fighter-jet"></i> <?php echo $rute_to;?></h1></center>  
                </div>
              </div>
            </div>
          </div>
        </header>


        <div class="gtco-section border-bottom">
          <div class="gtco-container">
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-6 animate-box">
                  <h3>Data Diri</h3>
                    <div class="gtco-contact-info">
                       <ul>
                        <li class="user">Nama : <?php echo $name;?></li>
                        <li class="address">Alamat : <?php echo $address;?></small></li>
                        <li class="phone">No. Telp : <?php echo $phone;?></li>
                        <li class="gender">Jenis Kelamin : <?php echo $gender;?></li>
                        <li class="email">Email : <?php echo $email;?></li>
                        <li class="code">Kode Reservasi : <?php echo $reservation_code; ?></li>
                      </ul>
                    </div>
                    <br><br>
            <!-- <div class="row form-group">
              <div class="col-md-12">
                <label class="sr-only" for="name">Seat Code</label>
                <select name="seat_code" class="form-control">
                  <//?php for ($i=1; $i <=$seat_qty; $i++) { ?>
                  <option><//?php echo "A$i"; ?></option>
                  <//?php } ?>
                </select>
              </div>
            </div>
          -->       <h3>Tempat Duduk</h3>
                    <div class="row" style="background-color: #F2F2F2;"><br>
                      <center><div style="background-color: #09C6AB; color: white; padding: 10px 10px; width: 20%;">Pilot</div></center><br>
                      <?php 
                      for ($i=1; $i <=$seat_qty; $i++) { ?>

                      <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-2 seat">
                        <div <?php $no=0; foreach($data_res as $row) { $no++; if($i==$seat_code) {echo 'style="background-color:#09C6AB;"';} else if($i==$row['seat_code']){echo 'style="background-color:#AEAEAE;"';}}?>>
                        <li><input type="checkbox" limit="1" class="flat-red" <?php foreach($data_res as $row) { $no++; if($i==$row['seat_code']){echo 'checked disabled';}}?> name="seat_code" value="<?php echo $i; ?>" disabled></li>
                        <li><?php echo 'A'.$i; ?></li>
                        </div>
                      </div>
                      <?php } ?>

                    </div><br> 
                    <div style="float: right;">
                    <li style="display: inline;">Ket : </li><li style="margin-left:10px; background-color: #09C6AB; padding-left: 50px; padding-bottom: 10px; display: inline;"></li><li style="display: inline; margin-left: 10px;"><small>   Tempat duduk anda</small></li>
                    <li style="margin-left:30px; background-color: #AEAEAE; padding-left: 50px; padding-bottom: 10px; display: inline;"></li><li style="display: inline;margin-left: 10px;"><small>   Sudah dipesan</small></li>
                    </div><br><br>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-5 col-md-push-1 animate-box">

        <div class="gtco-contact-info">
          <h3>Informasi Penerbangan</h3>
          <ul>
            <li><img src="<?php echo URL_ASSETS; ?>images/logo/<?php echo $logo;?>" height="20%" width="30%"></li>
            <li class="plane"><?php echo $plane_name;?> <small>(Boeing <?php echo $code;?>)</small></li>
            <li class="address"><?php echo $rute_form;?></small></li>
            <li class="address"><?php echo $rute_to;?></li>
            <li class="calendar"><?php echo $depart_date;?></li>
            <li class="clock"><?php echo $depart_at;?> WIB</li>
            <li class="pricetag">Rp <?php echo number_format($price,2);?> / orang</li>
          </ul>
        </div><br><br>
        <!-- <form action="#" method="post">
        <input type="hidden" name="price" value="<//?php echo $price; ?>"> -->
        <div class="form-group">
          <a href="<?php echo base_url(); ?>travelitacon/step3" class="btn btn-primary col-md-12">Selanjutnya</a>
            <!--<input type="submit" value="Selanjutnya" class="btn btn-primary col-md-12">-->
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!--<div class="form-group">
                <label>
                  <input type="checkbox" class="flat-red" checked>
                </label>
                <label>
                  <input type="checkbox" class="flat-red">
                </label>
                <label>
                  <input type="checkbox" class="flat-red " disabled>
                  Flat green skin checkbox
                </label>
            </div>-->
            <footer id="gtco-footer" style="background: black;" role="contentinfo">
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
        <script src="<?php echo URL_ASSETS;?>admin/plugins/iCheck/icheck.min.js"></script>
        <script>
          $(function () {
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
              checkboxClass: 'icheckbox_minimal-blue',
              radioClass   : 'iradio_minimal-blue'
            })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
})
</script>
</body>
</html>

