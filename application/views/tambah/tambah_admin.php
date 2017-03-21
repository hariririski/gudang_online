<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Administrator</title>
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

     <div class="toast-example" id="berhasil_hidup" aria-live="polite" data-plugin="toastr" data-message="<strong>Selamat !</strong> Anda Berhasil Mengaktifkan Pengguna." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-success toast-shadow" role="alert"></div>
    <div class="toast-example" id="gagal_hidup" aria-live="polite" data-plugin="toastr" data-message="<strong>Maaf !</strong> Anda Gagal Mengaktifkan Pengguna." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-error toast-shadow" role="alert"></div>

 <div class="toast-example" id="berhasil_matikan" aria-live="polite" data-plugin="toastr" data-message="<strong>Selamat !</strong> Anda Berhasil Mematikan Pengguna." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-success toast-shadow" role="alert"></div>
    <div class="toast-example" id="gagal_matikan" aria-live="polite" data-plugin="toastr" data-message="<strong>Maaf !</strong> Anda Gagal Mematikan Pengguna." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-error toast-shadow" role="alert"></div>



  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<?php echo $this->load->view('share/menu', '', TRUE);?>
  <div class="page animsition">
    <div class="page-header">

    </div>
    <div class="page-content">
      <!-- Panel Basic -->
    <div class="panel panel-bordered">
              <div class="panel-heading">
                <h3 class="panel-title">Tambah Administrator</h3>
              </div>
              <div class="panel-body">

                <div class="col-sm-12 col-md-12">
                <!-- Example Horizontal Form -->
                <div class="example-wrap">

                  <div class="example">
                    <form class="form-horizontal" action="admin/proses_tambah_admin" method="POST">
                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Nama Lengkap : </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off" required="on" autofocus="on">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Username : </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off" required="">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="col-sm-2 control-label">Password: </label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Level :</label>
                        <div class="col-sm-9">
                          <select class="form-control" required name="level">
                            <option value="">Pilih level</option>
                            <option value="1">Admin</option>
                            <option value="2">Super Admin</option>
                            <!-- 1 terkercil levelnya 1> paling tinggi` -->
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                          <button type="sumbmit" class="btn btn-primary">Simpan </button>
                          <button type="reset" class="btn btn-default btn-outline">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Horizontal Form -->
              </div>


              </div>
      </div>

      <div class="panel">
     <header class="panel-heading">
       <div class="panel-actions"></div>
       <h3 class="panel-title">Data Admin</h3>
     </header>
     <div class="panel-body">
       <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
         <thead>
           <tr>
             <th>NO</th>
             <th>Nama Lengkap</th>
             <th>Username</th>
             <th>Level</th>
             <th>Icon</th>
             <th>Status</th>
             <th>Reset</th>

           </tr>
         </thead>
         <tfoot>
           <tr>
             <th>NO</th>
             <th>Nama Lengkap</th>
             <th>Username</th>
             <th>Level</th>
             <th>Icon</th>
             <th>Status</th>
             <th>Reset</th>
           </tr>
         </tfoot>
         <tbody>

           <?php
              $i=0;
              foreach($lihat as $data_admin){
              $i++;
            ?>
               <tr>
                 <td><?php echo $i; ?></td>
                 <td><?php echo $data_admin->nama_lengkap; ?></td>
                 <td><?php echo $data_admin->username; ?></td>
                 <td width="10%">
                      <?php
                      if(($data_admin->level)==1){
                        echo '<span class="label label-info">Admin</span>';

                      }else if(($data_admin->level)==2){
                        echo '<span class="label label-danger">Super Admin</span>';
                      }
                       ?>

                 </td>
                 <td width="10%">
                      <?php
                      if(($data_admin->level)==1){
                      ?>

                        <img src="<?php echo site_url(); ?>assets/images/admin.png" width="50%">

                      <?php

                      }else if(($data_admin->level)==2){
                      ?>
                      <img src="<?php echo site_url(); ?>assets/images/super_admin.png" width="50%">
                      <?php

                      }
                       ?>

                 </td>

                 <?php
                 if(($data_admin->status)==0){
                 ?>

                 <?php
                 echo"<td class='center' width='10%'><a href='". site_url()."admin/hidupkan?id=$data_admin->id_admin' onclick=\"return confirm('Apakah Anda Yakin Mengaktifkan pengguna ?')
                   \" title='Hidupkan'><button type='button' class='btn btn-danger'>Hidupkan</button></a>
                   </td>";
                 ?>
                 <?php

               }else if(($data_admin->status)==1){
                 $super_admin=$this->session->userdata('super_admin');
               if ($super_admin==$data_admin->id_admin){ 

                echo"<td class='center' width='10%'><button type='button' disabled class='btn btn-success'>Matikan</button>
                   </td>";

               } else {
                 
                 echo"<td class='center' width='10%'><a href='". site_url()."admin/matikan?id=$data_admin->id_admin'  onclick=\"return confirm('Apakah Anda Yakin Mematikan Pengguna ?')
                   \" title='Matikan'><button type='button' class='btn btn-success'>Matikan</button></a>
                   </td>";

                 }
                 ?>
                 <?php

                 }
                  ?>
                  <?php
                  echo"<td class='center' width='10%'><a href='". site_url()."admin/reset?id=$data_admin->id_admin' onclick=\"return confirm('Apakah Anda Yakin Mereset Password Dengan 123456  ?')
                    \" title='Reset Password'><button type='button' class='btn btn-info'>Reset</button></a>
                    </td>";
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
