<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Edit Profil</title>
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


    </div>
    <div class="page-content">
      <!-- Panel Basic -->
    <div class="panel panel-bordered">
              <div class="panel-heading">
                <h3 class="panel-title">Edit Profil Admin</h3>
              </div>
              <div class="panel-body">

                <div class="col-sm-12 col-md-12">
                <!-- Example Horizontal Form -->
                <div class="example-wrap">
                  <?php
              $i=0;
              foreach($data_profil as $data){
              $i++;
            ?>

                  <div class="example">
                    <form class="form-horizontal" action="admin/proses_edit_profil?id=<?php echo $data->id_admin?>" method="POST">
                      <div class="form-group" >
                     
                        <label class="col-sm-2 control-label">Nama Lengkap : </label>
                        <div class="col-sm-9">
                       <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $data->nama_lengkap?>" required="">
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-sm-2 control-label">Username : </label>
                        <div class="col-sm-9">
                         <input type="text" class="form-control" name="username" value="<?php echo $data->username?>" required="">
                         </div>
                      </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Level:</label>
                        <div class="col-sm-9">
                         <select class="form-control" required name="level">


                         <?php
                      if(($data->level)==1){
                        echo ' <option value="1">Admin</option>
                            <option value="2">Super Admin</option>';

                      }else if(($data->level)==2){
                        echo ' <option value="2">Super Admin</option>
                            <option value="1">Admin</option>';
                      }
                       ?>

                          </select>

                        </div>
                      </div>


                     
              <?php
            }
              ?>
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

       <div class="panel panel-bordered">
              <div class="panel-heading">
                <h3 class="panel-title">Edit Password</h3>
              </div>
              <div class="panel-body">

                <div class="col-sm-12 col-md-12">
                <!-- Example Horizontal Form -->
                <div class="example-wrap">
                  <?php
              $i=0;
              foreach($data_profil as $data){
              $i++;
            ?>

                  <div class="example">
                    <form class="form-horizontal" action="admin/proses_edit_password?id=<?php echo $data->id_admin?>" method="POST">
                  <div class="form-group">
                        <label class="col-sm-2 control-label">Password Lama: </label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="password_lama" placeholder="Password" autocomplete="off" required="">
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="col-sm-2 control-label">Password Baru: </label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="password_baru" placeholder="Password" autocomplete="off" required="">
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="col-sm-2 control-label">Ulangi Password: </label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="ulangipassword" placeholder="Password" autocomplete="off" required="">
                        </div>
                      </div>

                        </div>
                      </div>

                      

                      
                     
              <?php
            }
              ?>
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
      </div>
      </div>


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
</body>
</html>
