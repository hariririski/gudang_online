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
                          <h4 class="modal-title">Edit Data Barang</h4>
                        </div>
        <!-- Example Horizontal Form -->
                <div class="example-wrap">

                  <div class="example">
                    <form class="form-horizontal" action="" method="POST">
                     <?php
              $i=0;
              foreach($lihat as $data){
              $i++;
            ?>
                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Kode Barang : </label>
                        <div class="col-sm-9">
                          <input type="text" readonly class="form-control" value="<?php echo $data->id_barang?>" name="id_barang"  placeholder="kode Barang" autocomplete="off" required="" autofocus="on">
                      </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Nama Barang : </label>
                        <div class="col-sm-9">
                         <input type="text"  readonly  class="form-control" value="<?php echo $data->nama_barang?>" name="nama_barang"  placeholder="nama Barang" autocomplete="off" required="" autofocus="on">
                      </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Merek : </label>
                        <div class="col-sm-9">
                          <input type="text"  readonly  class="form-control" value="<?php echo $data->merek?>" name="merek"  placeholder="merk" autocomplete="off" required="" autofocus="on">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">volume: </label>
                        <div class="col-sm-9">
                         <input type="text"  readonly   class="form-control" value="<?php echo $data->volume?>" name="volume"  placeholder="volume" autocomplete="off" required="" autofocus="on">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Satuan Barang :</label>
                        <div class="col-sm-9">
                          <select   readonly class="form-control" required>
                          <option value="<?php echo $data->id_satuan_barang; ?>"><?php echo $data->nama_satuan; ?></option>
                          <?php
                               $i=0;
                               foreach($satuan_barang as $select){
                               $i++;
                               if ($data->id_satuan_barang!= $select->id_satuan_barang){

                          ?>
                            <option value="<?php echo $select->id_satuan_barang; ?>"><?php echo $select->nama_satuan; ?></option>
                            <?php
                            }
                          }
                            ?>
                            <!-- 1 terkercil levelnya 1> paling tinggi` -->
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Tipe Barang :</label>
                        <div class="col-sm-9">
                          <select   readonly class="form-control" required>
                            <option value="<?php echo $data->id_tipe_barang; ?>"><?php echo $data->nama_tipe; ?></option>

                            <?php
                               $i=0;
                               foreach($tipe_barang as $select){
                               $i++;
                                if ($data->id_tipe_barang!= $select->id_tipe_barang){
                             ?>
                            <option value="<?php echo $select->id_tipe_barang; ?>"><?php echo $select->nama_tipe; ?></option>

                            <?php
                            }
                          }
                            ?>
                            <!-- 1 terkercil levelnya 1> paling tinggi` -->
                          </select>
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Jumlah : </label>
                        <div class="col-sm-9">
                          <input type="text"  readonly  class="form-control" value="<?php echo $data->merek?>" name="merek"  placeholder="merk" autocomplete="off" required="" autofocus="on">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Harga Satuan : </label>
                        <div class="col-sm-9">
                          <input type="text"  readonly  class="form-control" value="<?php echo $data->merek?>" name="merek"  placeholder="merk" autocomplete="off" required="" autofocus="on">
                        </div>
                      </div>
                       <?php } ?>


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
