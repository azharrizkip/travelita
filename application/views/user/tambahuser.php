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
        <li><a href="<?php base_url();?>rute"><i class="fa fa-map"></i> <span>Rute Perjalanan</span></a></li>
        <li><a href="<?php base_url();?>kota"><i class="fa fa-building"></i> <span>Kota</span></a></li>
        <li class="active"><a href="<?php base_url();?>user"><i class="fa fa-user"></i> <span>User</span></a></li>
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
      <h1>
        <i class="fa fa-plus"></i> Tambah User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>User</a></li>
        <li class="active">registration</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <div class="row">
    <div class="col-md-6">
     <div class="box box-success">
      <form action="<?php echo base_url()?>travelitacon/saveuser" method="post">
            <div class="box-body">
              <div class="form-group">
                <label>Username</label>
                <div class="input-group">
                <input type="text" id="username" class="form-control" name="username" required>
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                <input type="password" id="password" class="form-control" name="password" required>
                    <div class="input-group-addon">
                      <i class="fa fa-key"></i>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Fullname</label>
                <div class="input-group">
                <input type="text" id="fullname" class="form-control" name="fullname" required>
                  <div class="input-group-addon">
                    <i class="fa fa-text-width"></i>
                  </div>
              </div>
              </div>
              <div class="form-group">
                <label>Email</label>
                <div class="input-group">
                <input type="email" id="email" class="form-control" name="email" required>
                    <div class="input-group-addon">
                      <i class="fa fa-envelope"></i>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Level</label>
                  <select name="level" id="level" class="form-control">
                    <option>User</option>
                    <option>Admin</option>
                  </select>
              </div>
              <div class="form-group">
                <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
                <a href="<?php echo base_url();?>travelitacon/user" class="btn btn-primary">Kembali</a>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
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