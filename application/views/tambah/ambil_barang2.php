<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Pengambilan Barang</title>
    <?php echo $this->load->view('share/icon', '', TRUE);?>
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
<body class="site-navbar-small "  <?php echo $this->session->flashdata('pesan')?>>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="toast-example" id="berhasil" aria-live="polite" data-plugin="toastr" data-message="<strong>Selamat !</strong> Anda Berhasil Menambahkan Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-success toast-shadow" role="alert"></div>
    <div class="toast-example" id="gagal" aria-live="polite" data-plugin="toastr" data-message="<strong>Maaf !</strong> Anda Gagal Menambahkan Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-error toast-shadow" role="alert"></div>


  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<?php echo $this->load->view('share/menu', '', TRUE);?>
  <div class="page animsition">

    <div class="page-content">
      <!-- Panel Basic -->
    <div class="panel panel-bordered">
      <?php
         $i=0;
         $id=$_GET['id'];
         foreach($data_barang as $data){
         $i++;
       ?>
              <div class="panel-heading">
                <h3 class="panel-title">Pengambilan Barang <?php echo $data->nama_barang?></h3>
              </div>
              <div class="panel-body">

                <div class="col-sm-10 col-md-12">
                <!-- Example Horizontal Form -->
                <div class="example-wrap">

                  <div class="example">
                    <form class="form-horizontal" action="ambil_barang/proses_ambil_stok_barang?id=<?php echo $id?>&&id_barang=<?php echo $data->id_barang; ?>" method="POST">
                        <div class="col-sm-6 col-md-6">
                          <div class="form-group " >
                            <label class="col-sm-2 control-label">Kode: </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" readonly name="kode"  autocomplete="off" value="<?php echo $data->id_barang; ?>" >
                            </div>
                          </div>
                          <div class="form-group " >
                            <label class="col-sm-2 control-label">Nama: </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="nama" value="<?php echo $data->nama_barang; ?>" readonly  autocomplete="off" >
                            </div>
                          </div>


                          <div class="form-group ">
                            <label class="col-sm-2 control-label">Tipe : </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="tipe" value="<?php echo $data->nama_tipe; ?>"readonly  autocomplete="off" >
                            </div>
                          </div>
                        </div>



                        <div class="col-sm-6 col-md-6">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Jumlah :</label>
                            <div class="col-sm-6">
                              <select class="form-control" required name="jumlah">
                                <option value="">Jumlah</option>
                                <?php
                                   $i=0;
                                   $stok;

                                  for($i;$i<=$stok;$i++){

                                 ?>
                                <option value="<?php echo $i ?>"><?php echo $i; ?></option>

                                <?php
                                }
                                ?>
                                <!-- 1 terkercil levelnya 1> paling tinggi` -->
                              </select>
                            </div>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" name="tipe" value="<?php echo $data->nama_satuan; ?>"readonly  autocomplete="off" >
                            </div>
                          </div>
                          <!-- <div class="form-group ">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="tipe" value="<?php echo $data->nama_satuan; ?>"readonly  autocomplete="off" >
                            </div>
                          </div> -->
                          <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-6">
                              <?php
                              if($stok>0){
                              ?>
                              <button type="sumbmit" class="btn btn-primary">Simpan</button>

                              <?php
                              }else{
                              ?>
                                <script>
                                alert('Maaf Stok Barang Kosong');
                                </script>
                                <button type="button" disabled class="btn btn-primary">Simpan</button>

                                <?php

                              }
                              ?>
                                  <a href="<?php site_url()?>tambah_pengambilan_barang?id=<?php echo $_GET['id']?>"><button type="button" class="btn btn-primary">Kembali</button></a>
                            </div>
                          </div>
                        </div>

                        <?php
                      }
                         ?>





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
  <!-- Footer -->
<?php echo $this->load->view('share/footer2', '', TRUE);?>
  <!-- Core  -->
  <script src="<?php echo site_url(); ?>global/vendor/jquery/jquery.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/animsition/animsition.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
  <!-- Plugins -->
  <script src="<?php echo site_url(); ?>global/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/intro-js/intro.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/screenfull/screenfull.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/datatables-responsive/dataTables.responsive.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/datatables-tabletools/dataTables.tableTools.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/asrange/jquery-asRange.min.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/bootbox/bootbox.js"></script>
  <!-- Scripts -->
  <script src="<?php echo site_url(); ?>global/js/core.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/site.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/sections/menu.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/sections/menubar.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/sections/sidebar.js"></script>
  <script src="<?php echo site_url(); ?>global/js/configs/config-colors.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/configs/config-tour.js"></script>
  <script src="<?php echo site_url(); ?>global/js/components/asscrollable.js"></script>
  <script src="<?php echo site_url(); ?>global/js/components/animsition.js"></script>
  <script src="<?php echo site_url(); ?>global/js/components/slidepanel.js"></script>
  <script src="<?php echo site_url(); ?>global/js/components/switchery.js"></script>
  <script src="<?php echo site_url(); ?>global/js/components/datatables.js"></script>
  <script src="<?php echo site_url(); ?>assets/examples/js/tables/datatable.js"></script>
  <script src="<?php echo site_url(); ?>assets/examples/js/uikit/icon.js"></script>
  <script src="<?php site_url(); ?>global/vendor/toastr/toastr.js"></script>
  <script src="<?php site_url(); ?>global/js/components/toastr.js"></script>
</body>
</html>
