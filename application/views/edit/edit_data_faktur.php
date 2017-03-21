<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Admin</title>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/datatables-responsive/dataTables.responsive.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/examples/css/tables/datatable.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="<?php echo site_url(); ?>global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="<?php echo site_url(); ?>global/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo site_url(); ?>global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="<?php echo site_url(); ?>global/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
</head>
<body class="site-navbar-small ">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
     <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title">Edit Data Faktur</h4>
                        </div>
      <!-- Panel Basic -->

                 <?php
                   $i=0;
                   foreach($lihat as $data){
                   $i++;
                  ?>

                  <div class="example">
                    <form class="form-horizontal" action="faktur/proses_edit_faktur?id=<?php echo $data->id_faktur?>" method="POST">

                    
                       <div class="form-group">
                        <label class="col-sm-2 control-label">Tipe Faktur :</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="tipe_faktur"  required>
                            <option value="<?php echo $data->id_tipe_faktur; ?>"><?php echo $data->nama_faktur; ?></option>

                            <?php
                               $i=0;
                               foreach($tipe_faktur as $select){
                               $i++;
                                if ($data->id_tipe_faktur!= $select->id_tipe_faktur){
                             ?>
                            <option value="<?php echo $select->id_tipe_faktur; ?>"><?php echo $select->nama_faktur; ?></option>

                            <?php
                            }
                          }
                            ?>
                            <!-- 1 terkercil levelnya 1> paling tinggi` -->
                          </select>
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">No Faktur :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="<?php echo $data->nomor_faktur?>" name="no_faktur" placeholder="Nama Lengkap" autocomplete="off" required="">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">BAST :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="<?php echo $data->bast?>"  name="bast" placeholder="BAST" autocomplete="off" required="">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">MAK :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="<?php echo $data->mak?>"  name="mak" placeholder="MAK" autocomplete="off" required="">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Pelaksana :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="<?php echo $data->pelaksana?>"  name="pelaksana" placeholder="Pelaksana" autocomplete="off" required="">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Nominal :</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" value="<?php echo $data->nominal?>" name="nominal" placeholder="Nominal" autocomplete="off" required="">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Tahun Anggaran : </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="<?php echo $data->tahun_anggaran?>" name="tahun_anggaran" placeholder="Tahun Anggaran" autocomplete="off" required="">
                        </div>
                      </div>


                       <div class="form-group">
                        <label class="col-sm-2 control-label">Sumber Dana:</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="sumber_dana"  required>
                            <option value="<?php echo $data->id_sumber_dana; ?>"><?php echo $data->nama_sumber; ?></option>

                            <?php
                               $i=0;
                               foreach($sumber_dana as $select){
                               $i++;
                                if ($data->id_sumber_dana!= $select->id_sumber_dana){
                             ?>
                            <option value="<?php echo $select->id_sumber_dana; ?>"><?php echo $select->nama_sumber; ?></option>

                            <?php
                            }
                          }
                            ?>
                            <!-- 1 terkercil levelnya 1> paling tinggi` -->
                          </select>
                        </div>
                      </div>

                    
                         <?php
                            }
                            ?>
                      <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                          <button type="sumbmit" class="btn btn-primary">Simpan </button>
                          </div>
                      </div>


                    </form>
                  </div>
                </div>
                <!-- End Example Horizontal Form -->
              </div>


              </div>
      </div>



    </div>
  </div>
  <!-- End Page -->

</body>
</html>
