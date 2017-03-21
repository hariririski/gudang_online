<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Home</title>

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
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/chartist-js/chartist.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/aspieprogress/asPieProgress.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/examples/css/dashboard/v2.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/datatables-responsive/dataTables.responsive.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/examples/css/tables/datatable.css">
  <!-- Fonts -->
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
  <script>$('div.dataTables_filter input').focus();</script>
  <script>
  Breakpoints();
  </script>
</head>
<body class="site-navbar-small dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->



  <?php echo $this->load->view('share/menu', '', TRUE);?>
  <!-- Page -->
  <div class="page animsition">


    <div class="page-content container-fluid">
      <?php
      foreach($faktur_belum_finalisasi as $data){

      ?>
        <div class="alert alert-icon alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    <table  width="95%" border="0">
                      <tr >
                        <td>
                          <i class="icon wb-bell" aria-hidden="true"></i> Anda belum Memfinalisasi Faktur Barang Masuk Dengan Nomor Faktur: <?php echo $data->nomor_faktur?>
                        </td>
                        <td width="90px">
                            <a href="<?php echo site_url();?>tambah_stok_barang?id=<?php echo $data->id_faktur?>"><button class="btn btn-success" type="button">Lihat</button></a>
                        </td>
                      </tr>
                    </table>
        </div>
      <?php
        }
      ?>
      <?php
      foreach($pengambilan_belum_finalisasi as $data){

      ?>
      <div class="alert alert-icon alert-danger alert-dismissible alert dark alert-alt" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                  <table  width="95%" border="0">
                    <tr >
                      <td>
                        <i class="icon wb-bell" aria-hidden="true"></i> Anda belum Memfinalisasi Faktur Pengambilan Barang Nomor Faktur: <?php echo $data->id_penerima_barang_keluar?>
                      </td>
                      <td width="90px">
                            <a href="<?php echo site_url();?>tambah_pengambilan_barang?id=<?php echo $data->id_penerima_barang_keluar?>"><button class="btn btn-primary" type="button">Lihat</button></a>
                      </td>
                    </tr>
                  </table>

      </div>
      <?php
        }
      ?>
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xlg-12 col-lg-12 col-md-12">
          <!-- Panel Web Designer -->
          <div class="widget widget-shadow">
            <div class="widget-content text-center bg-white padding-40">

              <div class="row">
                <div class="col-xs-3">
                  <div class="widget">
                  <div class="widget-content padding-11 bg-blue-600 white">
                    <div class="counter counter-lg counter-inverse">
                      <div class="counter-label text-uppercase font-size-16">Total Barang</div>
                      <div class="counter-number-group">
                        <span class="counter-number">
                          <?php

                             foreach($jumlah_barang as $jumlah_barang){
                               echo $jumlah_barang->jumlah_barang;

                          }
                          ?>

                        </span>
                        <img src="<?php echo site_url(); ?>assets/images/barang.png" width="30%">
                      </div>
                      <div class="counter-label text-uppercase font-size-16"></div>
                    </div>
                  </div>
                </div>

                </div>
                <div class="col-xs-3">
                  <div class="widget">
                  <div class="widget-content padding-11 bg-yellow-600 white">
                    <div class="counter counter-lg counter-inverse">
                      <div class="counter-label text-uppercase font-size-16">Jumlah Faktur</div>
                      <div class="counter-number-group">
                        <span class="counter-number">
                          <?php

                             foreach($jumlah_faktur as $jumlah_faktur){
                               echo $jumlah_faktur->jumlah_faktur;

                          }
                          ?>



                        </span>
                      <img src="<?php echo site_url(); ?>assets/images/faktur.png" width="30%">
                      </div>
                      <div class="counter-label text-uppercase font-size-16"></div>
                    </div>
                  </div>
                </div>
                </div>

                <div class="col-xs-3">
                  <div class="widget">
                  <div class="widget-content padding-11 bg-green-600 white">
                    <div class="counter counter-lg counter-inverse">
                      <div class="counter-label text-uppercase font-size-16">Barang Tersedia</div>
                      <div class="counter-number-group">
                        <span class="counter-number">
                          <?php
                          $CI =& get_instance();
                          $CI->load->library('stok');
                            $tersedia=0;
                            $kosong=0;
                             foreach($data_barang as $data){
                               $nilai=$CI->stok->stok_barang($data->id_barang);
                            if($nilai>1){
                              $tersedia++;
                            }else if($nilai==0){
                              $kosong++;
                            }

                          }
                          echo $tersedia;
                         ?>
                        </span>
                        <img src="<?php echo site_url(); ?>assets/images/tersedia.png" width="30%">
                      </div>
                      <div class="counter-label text-uppercase font-size-16"></div>
                    </div>
                  </div>
                </div>
                </div>


                <div class="col-xs-3">
                  <div class="widget">
                  <div class="widget-content padding-11 bg-red-600 white">
                    <div class="counter counter-lg counter-inverse">
                      <div class="counter-label text-uppercase font-size-16">Barang Kosong</div>
                      <div class="counter-number-group">
                        <span class="counter-number"><?php echo $kosong ?></span>
                        <img src="<?php echo site_url(); ?>assets/images/kosong.png" width="30%">
                      </div>
                      <div class="counter-label text-uppercase font-size-16"></div>
                    </div>
                  </div>
                </div>
                </div>




              </div>

            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>

          <!-- Panel Traffic -->

          <!-- End Panel Traffic -->
          <div class="col-xlg-12 col-lg-12 col-md-12">
            <!-- Panel Traffic -->
            <div class="widget widget-shadow example-responsive" id="widgetLinearea">
              <div class="widget-content padding-30" style="min-width:480px;">
                <div class="row padding-bottom-20" style="height:calc(100% - 322px);">
                  <div class="col-sm-12 col-xs-12">
                    <h3><center><div class="blue-grey-700">DATA STOK BARANG </div></center><H3>
                  </div>

                </div>
                <br>


                    <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
                      <thead>
                        <tr>
                          <th hidden>&nbsp;</th>
                          <th hidden="on">NO</th>
                          <th>No Barang</th>
                          <th>Nama Barang</th>
                          <th>Type Barang</th>
                          <th>Sisa Barang</th>
                          <th>Status</th>

                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                         <th  hidden>&nbsp;</th>
                          <th hidden="on">NO</th>
                          <th>No Barang</th>
                          <th>Nama Barang</th>
                          <th>Type Barang</th>
                          <th>Sisa</th>
                         <th>Status</th>
                        </tr>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <?php
                          $a=10;


                          //$this->stok->stok_barang($a);
                           ?>

                          <?php
                             $i=0;
                             foreach($data_barang as $data){
                             $i++;

                           ?>
                           <td  hidden><?php
                               if($CI->stok->stok_barang($data->id_barang)>0){
                                 echo'<p><font color="white">1</font></p>';
                               }else{
                                 echo'<p><font color="white">2</font></p>';
                               }

                                 ?></td>
                           <td hidden="on"><?php echo $i; ?></td>
                           <td><?php echo $data->id_barang; ?></td>
                           <td><?php echo $data->nama_barang; ?></td>
                           <td><?php echo $data->nama_tipe; ?></td>
                           <td><?php echo $CI->stok->stok_barang($data->id_barang); ?></td>
                           <td><?php
                               if($CI->stok->stok_barang($data->id_barang)>0){
                                 echo '<button type="button" class="btn btn-round  btn-success btn-sm">Tersedia</button>';
                               }else{
                                   echo '<button type="button" class="btn btn-round  btn-danger btn-sm">Kosong</button>';
                               }

                               ?></td>

                        </tr>
                        <?php
                         }
                         ?>
                      </tbody>
                    </table>
                    <p align="center">


          <a href="cetak_rincian_barang_persediaan">
            <button type="button" class="btn btn-animate  btn-success">
              <span><i class="icon wb-print" aria-hidden="true"></i>Cetak Rincian Persediaan Barang</span>
            </button>
        </a>
        </p>



              </div>
            </div>
            <!-- End Panel Traffic -->
          </div>



        </div>
      </div>
  </div>
  <!-- End Page -->
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
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
  <script src="<?php echo site_url(); ?>global/vendor/chartist-js/chartist.min.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/gmaps/gmaps.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/matchheight/jquery.matchHeight-min.js"></script>
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
  <script src="<?php echo site_url(); ?>global/js/components/gmaps.js"></script>
  <script src="<?php echo site_url(); ?>global/js/components/matchheight.js"></script>
  <script src="<?php echo site_url(); ?>assets/examples/js/dashboard/v2.js"></script>




  <script src="<?php echo site_url(); ?>global/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/datatables-responsive/dataTables.responsive.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/datatables-tabletools/dataTables.tableTools.js"></script>

  <!-- Scripts -->




  <script src="<?php echo site_url(); ?>global/js/components/datatables.js"></script>
  <script src="<?php echo site_url(); ?>assets/examples/js/tables/datatable.js"></script>

</body>
</html>
