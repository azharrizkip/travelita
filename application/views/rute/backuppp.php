<!DOCTYPE html>
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
        <li><a href="<?php base_url();?>dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="active"><a href="<?php base_url();?>rute"><i class="fa fa-map"></i> <span>Rute Perjalanan</span></a></li>
        <li><a href="<?php base_url();?>user"><i class="fa fa-user"></i> <span>User</span></a></li>
        <li><a href="#"><i class="fa fa-book"></i> <span>Reservation</span></a></li>
        <!-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Rute Perjalanan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <div class="row">
    <div class="col-md-6">
     <div class="box box-info">
      <form action="<?php echo base_url();?>travelitacon/saverute" method="post">
            <div class="box-body">
               <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Waktu Keberangkatan :</label>
                  <div class="input-group">
                    <input type="text" class="form-control timepicker" id="depart_at" name="depart_at" required>
                    <div class="input-group-addon bg-orange">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                </div>
               </div>
              <div class="form-group">
                <label>Keberangkatan</label>
                <div class="input-group">
                <input type="text" id="rute_form" class="form-control" name="rute_form" required>
                    <div class="input-group-addon bg-aqua">
                      <i class="fa fa-map-marker"></i>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Tujuan</label>
                <div class="input-group">
                <input type="text" id="rute_to" class="form-control" name="rute_to" required>
                    <div class="input-group-addon bg-aqua">
                      <i class="fa fa-map-marker"></i>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Harga</label>
                <div class="input-group">
                <input type="text" id="price" class="form-control" name="price" value="Rp " required>
                    <div class="input-group-addon bg-green">
                      <i class="fa fa-money"></i>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Id Transportasi</label>
                <div class="input-group">
                <input type="text" id="transportationid" class="form-control" name="transportationid" required>
                    <div class="input-group-addon bg-blue">
                      <i class="fa fa-plane"></i>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
                <a href="<?php echo base_url();?>travelitacon/rute" class="btn btn-primary">Kembali</a>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
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
<script src="<?php echo URL_ASSETS;?>admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URL_ASSETS;?>admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo URL_ASSETS;?>admin/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>