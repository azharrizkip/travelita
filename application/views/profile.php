<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <?php $this->load->view('inc/head'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <?php $this->load->view('inc/head2'); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo URL_ASSETS;?>admin/dist/img/user-3.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("username"); ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?php base_url();?>dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="<?php base_url();?>rute"><i class="fa fa-map"></i> <span>Rute Perjalanan</span></a></li>
        <li><a href="<?php base_url();?>user"><i class="fa fa-user"></i> <span>User</span></a></li>
        <li><a href="<?php base_url();?>trans"><i class="fa fa-plane"></i> <span>Transportation</span></a></li>
        <li><a href="#"><i class="fa fa-book"></i> <span>Reservation</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i> <span>Profile</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-user"></i>Profil</a></li>
            <li><a href="#"><i class="fa fa-pencil"></i>Edit Profil</a></li>
            <li><a href="#"><i class="fa fa-clock-o"></i>Riwayat Reservasi</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>
    <!-- Main content -->
          <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <div style="float: right">
              <a href="#" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-primary"><i class="fa fa-gear"></i></a>
              </div>
              <h3 class="widget-user-username"><?php echo $this->session->userdata("fullname"); ?></h3>
              <h5 class="widget-user-desc"><?php echo $this->session->userdata("level"); ?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo URL_ASSETS;?>admin/dist/img/user-3.png" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          </div>
          <div class="col-md-3">
           <div class="box box-widget">
            <div class="box-body box-profile">
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Username</b> : <?php echo $this->session->userdata("username"); ?>
                </li>
                <li class="list-group-item">
                  <b>Fullname</b> : <?php echo $this->session->userdata("fullname"); ?>
                </li>
                <li class="list-group-item">
                  <b>Email</b> : <?php echo $this->session->userdata("email"); ?>
                </li>
                <li class="list-group-item">
                  <b>Level</b> : <?php echo $this->session->userdata("level"); ?>
                </li>
              </ul>
          </div>
          </div>
          </div>
    <section class="content container-fluid">
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php $this->load->view('inc/footer')?>

  <!-- Control Sidebar -->
  <?php $this->load->view('inc/rightbar')?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo URL_ASSETS;?>admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo URL_ASSETS;?>admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo URL_ASSETS;?>admin/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>