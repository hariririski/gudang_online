<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Login</title>

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
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/examples/css/pages/login-v2.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/fonts/brand-icons/brand-icons.min.css">
    <link rel="stylesheet" href="<?php site_url(); ?>global/vendor/toastr/toastr.css">
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
<body class="page-login-v2 layout-full page-dark"  <?php echo $this->session->flashdata('pesan')?>>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <!-- Page -->
<a class="toast-error" id="exampleTopFullWidth" data-plugin="toastr" data-icon-class="toast-just-text toast-error" data-message="Maaf Username Atau Password Anda Salah" data-container-id="toast-topFullWidth" data-position-class="toast-top-full-width" data-show-method="slideDown" href="javascript:void(0)" role="button"></a>
  <div class="page animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">

    <div class="page-content">

      <div class="page-brand-info">

        <div class="brand">
          <img  src="<?php echo site_url(); ?>assets/images/login2.png" width="120%"alt="...">

        </div>

      </div>
      <div class="page-login-main">
        <div class="brand visible-xs">
          <img class="brand-img" src="<?php echo site_url(); ?>assets/images/login3.png" width="100%"alt="...">
          <!-- <h3 class="brand-text font-size-40">Sistem Informasi</h3> -->
        </div>
        <h3 class="font-size-24">Sign In</h3>

        <form method="post" action="login/proses_login">
          <div class="form-group">
            <label class="sr-only" for="inputEmail">Username</label>
            <input type="text" class="form-control" id="inputEmail" name="username" placeholder="username" autofocus="on" required="on">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required="on">
          </div>
         
          <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </form>
        <script>
        toastr.success('Success messages');
        </script>

          <?php echo $this->load->view('share/footer', '', TRUE);?>
      </div>
    </div>
  </div>
  <!-- End Page -->
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
  <script src="<?php echo site_url(); ?>global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
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
  <script src="<?php echo site_url(); ?>global/js/components/jquery-placeholder.js"></script>
    <script src="<?php site_url(); ?>global/vendor/toastr/toastr.js"></script>
      <script src="<?php site_url(); ?>global/js/components/toastr.js"></script>
  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
  </script>
</body>
</html>
