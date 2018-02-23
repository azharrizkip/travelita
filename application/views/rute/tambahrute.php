<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('inc/head'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php $this->load->view('inc/head2'); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo URL_ASSETS;?>admin/dist/img/user-3.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("username"); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
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
      <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php base_url();?>dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="active"><a href="<?php base_url();?>rute"><i class="fa fa-map"></i> <span>Rute Perjalanan</span></a></li>
        <li><a href="<?php base_url();?>kota"><i class="fa fa-building"></i> <span>Kota</span></a></li>
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
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-plus"></i> Tambah Rute Perjalanan
        <small>Preview</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <div class="col-lg-6 col-xs-12">
          <!-- small box -->
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
                <label>Tanggal</label>
                <div class="input-group date">
                  <input type="text" readonly="true" name="depart_date" class="form-control pull-right" id="datepicker" required>
                  <div class="input-group-addon bg-purple">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Keberangkatan</label>
                <div class="input-group">
                <select class="form-control select2" name="rute_form">
                  <?php $no=0; foreach($data_kota as $row) { $no++ ?>
                  <option><?php echo $row['kota']?> (<?php echo $row['bandara']?>)</option>
                  <?php } ?>
                </select>
                    <div class="input-group-addon bg-aqua">
                      <i class="fa fa-map-marker"></i>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Tujuan</label>
                <div class="input-group">
                 <select class="form-control select2" name="rute_to">
                  <?php $no=0; foreach($data_kota as $row) { $no++ ?>
                  <option><?php echo $row['kota']?> (<?php echo $row['bandara']?>)</option>
                  <?php } ?>
                </select>
                    <div class="input-group-addon bg-aqua">
                      <i class="fa fa-map-marker"></i>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Harga</label>
                <div class="input-group">
                <input type="number" id="price" class="form-control" name="price" required>
                    <div class="input-group-addon bg-green">
                      <i class="fa fa-money"></i>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Id Transportasi</label>
                <div class="input-group">
                <select class="form-control select2" name="transportationid">
                  <?php $no=0; foreach($data_trans as $row) { $no++ ?>
                  <option value="<?php echo $row['transportationid']?>"><?php echo $row['plane_name']?> (<?php echo $row['code']?>)</option>
                  <?php } ?>
                </select>
                    <div class="input-group-addon bg-blue">
                      <i class="fa fa-plane"></i>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
                <a href="<?php echo base_url();?>travelitacon/rute" class="btn btn-primary">Kembali</a>
              </div>
            </div>
            </form>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5 col-xs-12">
          <div class="box box-primary">
            <center><h4>General Information</h4></center>
            <div class="box-body">

          <!-- small box -->
          <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="ion ion-map"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Rute Perjalanan</span>
              <span class="info-box-number">18</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
              <span class="progress-description">
                    50% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-plane"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Air Asia <i>C5-987</i></span>
              <span class="info-box-number">20 of 100</span>

              <div class="progress">
                <div class="progress-bar" style="width: 20%"></div>
              </div>
              <span class="progress-description">
                    80 Kursi tersisa
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-plane"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Garuda Indonesia <i>C5-123</i></span>
              <span class="info-box-number">50 of 150</span>

              <div class="progress">
                <div class="progress-bar" style="width: 30%"></div>
              </div>
              <span class="progress-description">
                    100 Kursi tersisa
                  </span>
            </div>
            </div>
            <!-- /.info-box-content -->
          </div>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo URL_ASSETS;?>admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo URL_ASSETS;?>admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo URL_ASSETS;?>admin/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo URL_ASSETS;?>admin/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo URL_ASSETS;?>admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo URL_ASSETS;?>admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="<?php echo URL_ASSETS;?>admin/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo URL_ASSETS;?>admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo URL_ASSETS;?>admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo URL_ASSETS;?>admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo URL_ASSETS;?>admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo URL_ASSETS;?>admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo URL_ASSETS;?>admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo URL_ASSETS;?>admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo URL_ASSETS;?>admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo URL_ASSETS;?>admin/dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
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

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
