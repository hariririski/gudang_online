<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Detail Faktur</title>
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
<?php echo $this->load->view('share/menu', '', TRUE);?>
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Detail</h1>


    </div>
    <div class="page-content">
      <!-- Panel Basic -->
    <div class="panel panel-bordered">
              <div class="panel-heading">
                <h3 class="panel-title">Data Faktur</h3>
              </div>
              <div class="panel-body">

                <div class="col-sm-12 col-md-12">
                <!-- Example Horizontal Form -->
                <div class="example-wrap">

                  <div class="example">
                    <form class="form-horizontal" action="" method="POST">
                      <?php
                         $i=0;
                         foreach($data_faktur as $data){
                         $i++;
                       ?>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Tipe Faktur :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" disabled name="name" value="<?php echo $data->nama_faktur; ?>" placeholder="Nama Lengkap" autocomplete="off" required="">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">No Faktur :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" disabled name="name"  value="<?php echo $data->nomor_faktur; ?>"  placeholder="Nama Lengkap" autocomplete="off" required="">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">BAST :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" disabled name="name"  value="<?php echo $data->bast; ?>" placeholder="BAST" autocomplete="off" required="">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">MAK :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control"  disabled name="name"  value="<?php echo $data->mak; ?>" placeholder="MAK" autocomplete="off" required="">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Pelaksana :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" disabled name="name"  value="<?php echo $data->pelaksana; ?>"placeholder="Pelaksana" autocomplete="off" required="">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Jumlah Anggaran :</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" disabled name="name"  value="<?php echo $data->nominal; ?>" placeholder="Nominal" autocomplete="off" required="">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Tahun Anggaran : </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" disabled name="name"  value="<?php echo $data->tahun_anggaran; ?>" placeholder="Tahun Anggaran" autocomplete="off" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Sumber Dana :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" disabled name="name" value="<?php echo $data->nama_sumber; ?>" placeholder="Nama Lengkap" autocomplete="off" required="">
                        </div>
                      </div>
                      <?php
                       }
                       ?>


                    </form>

                  <p align ="center">
                    <a href="edit_data_faktur"  data-target="#exampleFillIn" data-toggle="modal">
                      <button type="button" class="btn btn-animate btn-animate-side btn-success">
                        <span><i class="icon wb-download" aria-hidden="true"></i>Edit Data Faktur</span>
                      </button>
                  </a>
                  </p>

                  </div></div>
                <!-- End Example Horizontal Form -->
              </div>


              </div>
      </div>

      <div class="panel">
     <header class="panel-heading">
       <div class="panel-actions"></div>
       <h3 class="panel-title">Data Barang</h3>
     </header>
     <div class="panel-body">
       <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
         <thead>

           <tr>

             <th>NO</th>
             <th>Kode Barang</th>
             <th>Nama Barang</th>
             <th>Merek</th>
             <th>Volume </th>
             <th>Tipe Barang </th>


             <?php
                $super_admin=$this->session->userdata('super_admin');
                if ($super_admin==true){
                 echo " <th>Tanggal Dibuat </th>
                        <th>Admin</th>";
                }
                ?>

                <th>Satuan Barang </th>
                <th>Jumlah</th>
                <th>Harga Satuan </th>
                <th>Total Harga </th>
                <th>Edit </th>




           </tr>
         </thead>
         <tfoot>
           <tr>

               <th colspan="9" >Jumlah</th>

               <?php

                  foreach($data_barang_faktur as $data){

                ?>
                <th><?php echo $data->total_barang; ?></th>
                <th>Rp.<?php echo $data->total_harga_satuan; ?></th>
                <th>Rp.<?php echo $total_harga= ($data->total_barang * $data->total_harga_satuan); ?></th>

                <?php
                }
                 ?>
                 <td></td>






           </tr>
         </tfoot>
         <tbody>
           <?php
              $i=0;
              foreach($data_barang_faktur as $data){
              $i++;
            ?>
             <tr>
               <td><?php echo $i; ?></td>
               <td><?php echo $data->id_barang; ?></td>
               <td><?php echo $data->nama_barang; ?></td>

               <td><?php echo $data->merek; ?></td>
               <td><?php echo $data->volume; ?></td>
               <td><?php echo $data->nama_tipe; ?></td>




               <?php
                  $super_admin=$this->session->userdata('super_admin');
                  if ($super_admin==true){
                 ?>
                    <td><?php echo $data->barang_masuk; ?></td>
                    <td><?php echo $data->nama_lengkap; ?></td>
                   <?php
                  }
                  ?>

                  <td><?php echo $data->nama_satuan; ?></td>
                  <td><?php echo $data->jumlah_masuk; ?></td>
                 <td>Rp.<?php echo $data->harga_satuan; ?></td>
                 <td>Rp.<?php echo $total_harga=($data->harga_satuan * $data->jumlah_masuk) ; ?></td>

                 <?php
                echo"<td class='center' width='10%'><a   data-target='#exampleModalPrimary'
                         data-toggle='modal'  href='". site_url()."edit_data_barang_faktur?id=$data->id_barang' onclick=\"return confirm('Apakah Anda Ingin Mengubah Data?')
                   \" title='edit'><button type='button' class='btn btn-warning'>Edit</button></a>
                   </td>";

                 ?>

             </tr>
           <?php
            }
            ?>

         </tbody>
       </table>
       <p align ="center">
         <a href="">
           <button type="button" class="btn btn-animate btn-animate-side btn-success">
             <span><i class="icon wb-download" aria-hidden="true"></i>Cetak Faktur</span>
           </button>
       </a>
       </p>
     </div>

   </div>


    </div>
  </div>
  <!-- End Page -->
  <!-- Footer -->
     <?php echo $this->load->view('share/modala', '', TRUE);?>
     <?php echo $this->load->view('share/modal', '', TRUE);?>
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
</body>
</html>
