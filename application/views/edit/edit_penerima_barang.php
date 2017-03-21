<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Tipe Barang</title>
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
  <link rel="stylesheet" href="<?php site_url(); ?>global/vendor/toastr/toastr.css">
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
<body class="site-navbar-small " <?php echo $this->session->flashdata('pesan')?> >
  <!-- <a class="toast-error" id="exampleTopFullWidth" data-plugin="toastr" data-icon-class="toast-just-text toast-error" data-message="Maaf Username Atau Password Anda Salah" data-container-id="toast-topFullWidth" data-position-class="toast-top-full-width" data-show-method="slideDown" href="javascript:void(0)" role="button"></a> -->


  <div class="toast-example" id="berhasil" aria-live="polite" data-plugin="toastr" data-message="<strong>Selamat !</strong> Anda Berhasil Menambahkan Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-success toast-shadow" role="alert"></div>
  <div class="toast-example" id="gagal" aria-live="polite" data-plugin="toastr" data-message="<strong>Maaf !</strong> Anda Gagal Menambahkan Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-error toast-shadow" role="alert"></div>

  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title">Edit Data</h4>
                        </div>
  
      <!-- Panel Basic -->
         <?php
              $i=0;
              foreach($lihat as $data){
              $i++;
            ?>
                  <div class="example">
                   <form class="form-horizontal" action="penerima_barang/proses_edit_penerima?id=<?php echo $data->id_penerima_barang?>" method="POST">
                    
                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Penerima Barang : </label>
                        <div class="col-sm-9">
                      <input type="text" class="form-control" value="<?php echo $data->nama_penerima?>" name="nama_penerima"  placeholder="Nama Penerima Barang" autocomplete="off" required="" autofocus="on">
                      </div>
                      </div>

                       <div class="form-group" >
                        <label class="col-sm-2 control-label">Jenis Penerima : </label>
                        <div class="col-sm-9">
                         <select class="form-control" name="jenis_penerima" required>
                          <option value="<?php echo $data->id_jenis_penerima; ?>"><?php echo $data->nama_jenis_penerima; ?></option>
                          <?php
                               $i=0;
                               foreach($select_jenis_penerima as $select){
                               $i++;
                               if ($data->id_jenis_penerima!= $select->id_jenis_penerima){

                          ?>
                            <option value="<?php echo $select->id_jenis_penerima; ?>"><?php echo $select->nama_jenis_penerima; ?></option>
                            <?php
                            }
                          }
                            ?>
                            <!-- 1 terkercil levelnya 1> paling tinggi` -->
                          </select>
                       
                         </div>
                      </div>



                      <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                          <button type="sumbmit" class="btn btn-primary">Simpan </button>
                        </div>
                      </div>
                   

                  </div>
                
  <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                       <?php } ?> 
 </form>
</body>
</html>
