<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo URL_ASSETS;?>table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo URL_ASSETS;?>table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo URL_ASSETS;?>table/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo URL_ASSETS;?>table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo URL_ASSETS;?>table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo URL_ASSETS;?>table/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL_ASSETS;?>table/css/main.css">
<style type="text/css">
.column1 {
  width: 8%;
  padding-left: 40px;
}

.column2 {
  width: 13%;
}

.column3 {
  width: 15%;
}

.column4 {
  width: 15%;
}

.column5 {
  width: 13%;
}
.column6 {
  width: 10%;
}
.column7 {
  width: 10%;
}
</style>
<div class="container-table100" style="background-image: url(<?php echo URL_ASSETS;?>front/images/2.jpg); 
  background-size: cover;">
<div class="wrap-table100">
<div class="table100 ver3 m-b-110">
          <div class="table100-head">
            <table>
              <thead>
                <tr class="row100 head">
                  <th class="cell100 column1">No.</th>
                  <th class="cell100 column2">Waktu Keberangkatan</th>
                  <th class="cell100 column3">Keberangkatan</th>
                  <th class="cell100 column4">Tujuan</th>
                  <th class="cell100 column5">Harga</th>
                  <th class="cell100 column6">Id Pesawat</th>
                  <th class="cell100 column7">Aksi</th>
                </tr>
              </thead>
            </table>
          </div>

          <div class="table100-body js-pscroll">
            <table>
              <tbody>
                <?php $no=0; foreach($data_rute as $row) { $no++ ?>
                        <tr>
                          <td class="cell100 column1"><?php echo $no; ?></td>
                          <td class="cell100 column2"><?php echo $row['depart_at']; ?></td>
                          <td class="cell100 column3"><?php echo $row['rute_form']; ?></td>
                          <td class="cell100 column4"><?php echo $row['rute_to']; ?></td>
                          <td class="cell100 column5">Rp <?php echo $row['price']; ?></td>
                          <td class="cell100 column6"><?php echo $row['transportationid']; ?></td>
                          <td class="cell100 column7">
                              <a href="<?php echo base_url(); ?>travelitacon/step1/<?php echo $row['id_rute']; ?>" class="btn btn-primary"><i class="fa fa-plane"></i> Pesan</a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
        </div>
  <script src="<?php echo URL_ASSETS;?>table/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo URL_ASSETS;?>table/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo URL_ASSETS;?>table/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo URL_ASSETS;?>table/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo URL_ASSETS;?>table/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script>
    $('.js-pscroll').each(function(){
      var ps = new PerfectScrollbar(this);

      $(window).on('resize', function(){
        ps.update();
      })
    });
      
    
  </script>
<!--===============================================================================================-->
  <script src="<?php echo URL_ASSETS;?>table/js/main.js"></script>