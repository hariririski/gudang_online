<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Data Faktur</title>


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

 <div class="toast-example" id="berhasil_hapus" aria-live="polite" data-plugin="toastr" data-message="<strong>Selamat !</strong> Anda Berhasil Menghapus Data."  data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-success toast-shadow" role="alert"></div>
    <div class="toast-example" id="gagal_hapus" aria-live="polite" data-plugin="toastr" data-message="<strong>Maaf !</strong> Anda Gagal Menambahkan Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-error toast-shadow" role="alert"></div>

  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<?php echo $this->load->view('share/menu', '', TRUE);?>
  <div class="page animsition">
    <div class="page-header">


    </div>
    <div class="page-content">
      <!-- Panel Basic -->

      <div class="panel">
     <header class="panel-heading">
       <div class="panel-actions"></div>
       <h3 class="panel-title">Data Faktur</h3>
     </header>
     <div class="panel-body">
       <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
         <thead>

           <tr>
             <th>NO</th>
             <th>Tipe Faktur</th>
             <th>NO Faktur</th>

             <th>Pelaksana</th>
             <th>Tahun Anggaran</th>

             <th>Sumber Dana</th>
             <?php
                $super_admin=$this->session->userdata('super_admin');
                if ($super_admin==true){
                 echo " <th>Tanggal Dibuat </th>
                        <th>Admin</th>";
                }
                ?>
             <th>Tambah Barang</th>


             <th>Hapus</th>




           </tr>
         </thead>
         <tfoot>
           <tr>
             <th>NO</th>
             <th>Tipe Faktur</th>
             <th>NO Faktur</th>

             <th>Pelaksana</th>
             <th>Tahun Anggaran</th>

             <th>Sumber Dana</th>
             <?php
                $super_admin=$this->session->userdata('super_admin');
                if ($super_admin==true){
                 echo " <th>Tanggal Dibuat </th>
                        <th>Admin</th>";
                }
                ?>
            <th>Tambah Barang</th>


             <th>Hapus</th>


           </tr>
         </tfoot>
         <tbody>
           <?php
              $i=0;
              foreach($data_faktur as $data){
              $i++;
            ?>
             <tr <?php if($data->status_faktur==0){?>class="alert alert-alt alert-danger alert-dismissible" <?php } ?>>
               <td><?php echo $i; ?></td>
               <td><?php echo $data->nama_faktur; ?></td>
               <td><?php echo $data->nomor_faktur; ?></td>

               <td><?php echo $data->pelaksana; ?></td>
               <td><?php echo $data->tahun_anggaran; ?></td>

               <td><?php echo $data->nama_sumber; ?></td>

               <?php
                  $super_admin=$this->session->userdata('super_admin');
                  if ($super_admin==true){
                 ?>
                    <td><?php echo $data->tanggal_faktur; ?></td>
                    <td><?php echo $data->nama_lengkap; ?></td>
                   <?php
                  }
                  ?>

               <td width="10%"> <a href="tambah_stok_barang?id=<?php echo $data->id_faktur; ?>"> <button type="sumbmit" class="btn btn-info">Tambah Barang</button></a></td>



              <!--  <td width="10%"> <a href ="<?php echo site_url (); ?>edit_data_faktur?>" data-target="#exampleFillIn" data-toggle="modal" > <button type="sumbmit"  id="inputStylePrimary" name="colorChosen"class="btn btn-primary">Edit</button></a></td>
           -->
           <?php

              if ($data->status_faktur==0){
             ?>
               <?php
              echo"<td class='center' width='10%'><a href='". site_url()."faktur/proses_hapus_faktur?id=$data->id_faktur' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?')
                 \" title='edit'><button type='button' class='btn btn-danger'>Hapus</button></a>
                 </td>";

               ?>
               <?php
             }else{
                ?>
                <?php
                $super_admin=$this->session->userdata('super_admin');
                if ($super_admin==true){
                  echo"<td class='center' width='10%'><a href='". site_url()."faktur/proses_hapus_faktur?id=$data->id_faktur' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?')
                     \" title='edit'><button type='button' class='btn btn-danger'>Hapus</button></a>
                     </td>";


                }else{
               echo"<td class='center' width='10%'><button type='button' class='btn btn-danger' disabled>Hapus</button>
                  </td>";
                }
                ?>
                <?php
             }
              ?>
             </tr>
           <?php
            }
            ?>

         </tbody>
       </table>
     </div>
   </div>


    </div>
  </div>
  <!-- End Page -->
         <?php echo $this->load->view('share/modala', '', TRUE);?>

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


   <script type="text/javascript">
      $('body').on('hidden.bs.modal', '.modal', function () { $(this).removeData('bs.modal'); });
      $.fn.modal.Constructor.prototype.enforceFocus = function() {};
    </script>

</body>
</html>
