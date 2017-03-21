<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Toastr | Remark Admin Template</title>
  <link rel="apple-touch-icon" href="<?php site_url(); ?>assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php site_url(); ?>assets/images/favicon.ico">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php site_url(); ?>global/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php site_url(); ?>global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php site_url(); ?>assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="<?php site_url(); ?>global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php site_url(); ?>global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php site_url(); ?>global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php site_url(); ?>global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php site_url(); ?>global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php site_url(); ?>global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="<?php site_url(); ?>global/vendor/toastr/toastr.css">
  <link rel="stylesheet" href="<?php site_url(); ?>assets/examples/css/advanced/toastr.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php site_url(); ?>global/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php site_url(); ?>global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="<?php site_url(); ?>global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="<?php site_url(); ?>global/vendor/media-match/media.match.min.js"></script>
    <script src="<?php site_url(); ?>global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="<?php site_url(); ?>global/vendor/modernizr/modernizr.js"></script>
  <script src="<?php site_url(); ?>global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
  <script>

      $(document).ready(function(){
          document.getElementById("exampleTopLeft").click();
      });

  </script>

</head>
<body class="site-navbar-small " <?php echo $this->session->flashdata('pesan')?>>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse"
  role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <a class="navbar-brand navbar-brand-center" href="../index.html">
        <img class="navbar-brand-logo navbar-brand-logo-normal" src="<?php site_url(); ?>assets/images/logo.png"
        title="Remark">
        <img class="navbar-brand-logo navbar-brand-logo-special" src="<?php site_url(); ?>assets/images/logo-blue.png"
        title="Remark">
        <span class="navbar-brand-text hidden-xs"> Remark</span>
      </a>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
    </div>
    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
            role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
          <li class="dropdown dropdown-fw dropdown-mega">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="fade" role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <div class="mega-content">
                  <div class="row">
                    <div class="col-sm-4">
                      <h5>UI Kit</h5>
                      <ul class="blocks-2">
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="../advanced/animation.html">Animation</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="../uikit/buttons.html">Buttons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="../uikit/colors.html">Colors</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="../uikit/dropdowns.html">Dropdowns</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="../uikit/icons.html">Icons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="../advanced/lightbox.html">Lightbox</a>
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="../uikit/modals.html">Modals</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="../uikit/panel-structure.html">Panels</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="../structure/overlay.html">Overlay</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="../uikit/tooltip-popover.html ">Tooltips</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="../advanced/scrollable.html">Scrollable</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="../uikit/typography.html">Typography</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5>Media
                        <span class="badge badge-success">4</span>
                      </h5>
                      <ul class="blocks-3">
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="<?php site_url(); ?>global/photos/placeholder.png" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="<?php site_url(); ?>global/photos/placeholder.png" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="<?php site_url(); ?>global/photos/placeholder.png" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="<?php site_url(); ?>global/photos/placeholder.png" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="<?php site_url(); ?>global/photos/placeholder.png" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="<?php site_url(); ?>global/photos/placeholder.png" alt="..."
                            />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5 class="margin-bottom-0">Accordion</h5>
                      <!-- Accordion -->
                      <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                      role="tablist">
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                            aria-expanded="false" aria-controls="siteMegaCollapseOne">
                                Collapsible Group Item #1
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                          role="tabpanel">
                            <div class="panel-body">
                              De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                              congressus ostendit alienae, voluptati ornateque
                              accusamus clamat reperietur convicia albucius.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseTwo">
                                Collapsible Group Item #2
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                          role="tabpanel">
                            <div class="panel-body">
                              Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                              loco ignavi, credo videretur multoque choro fatemur
                              mortis animus adoptionem, bello statuat expediunt
                              naturales.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseThree">
                                Collapsible Group Item #3
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                          role="tabpanel">
                            <div class="panel-body">
                              Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                              suscipere. Desiderat magnum, contenta poena desiderant
                              concederetur menandri damna disputandum corporum.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion -->
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->
        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
            aria-expanded="false" role="button">
              <span class="flag-icon flag-icon-us"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-gb"></span> English</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-fr"></span> French</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-cn"></span> Chinese</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-de"></span> German</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-nl"></span> Dutch</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="<?php site_url(); ?>global/portraits/5.jpg" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
            data-animation="scale-up" role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
              <span class="badge badge-danger up">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>NOTIFICATIONS</h5>
                <span class="label label-round label-danger">New 5</span>
              </li>
              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">A new order has been placed</h6>
                          <time class="media-meta" datetime="2016-06-12T20:50:48+08:00">5 hours ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Completed the task</h6>
                          <time class="media-meta" datetime="2016-06-11T18:29:20+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Settings updated</h6>
                          <time class="media-meta" datetime="2016-06-11T14:05:00+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Event started</h6>
                          <time class="media-meta" datetime="2016-06-10T13:50:18+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Message received</h6>
                          <time class="media-meta" datetime="2016-06-10T12:34:48+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
            data-animation="scale-up" role="button">
              <i class="icon wb-envelope" aria-hidden="true"></i>
              <span class="badge badge-info up">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>MESSAGES</h5>
                <span class="label label-round label-info">New 3</span>
              </li>
              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="<?php site_url(); ?>global/portraits/2.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Mary Adams</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-17T20:22:05+08:00">30 minutes ago</time>
                          </div>
                          <div class="media-detail">Anyways, i would like just do it</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="<?php site_url(); ?>global/portraits/3.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Caleb Richards</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-17T12:30:30+08:00">12 hours ago</time>
                          </div>
                          <div class="media-detail">I checheck the document. But there seems</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="<?php site_url(); ?>global/portraits/4.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">June Lane</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-16T18:38:40+08:00">2 days ago</time>
                          </div>
                          <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="<?php site_url(); ?>global/portraits/5.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Edward Fletcher</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-15T20:34:48+08:00">3 days ago</time>
                          </div>
                          <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    See all messages
                  </a>
              </li>
            </ul>
          </li>
          <li id="toggleChat">
            <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="../site-sidebar.tpl">
              <i class="icon wb-chat" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->
      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>
            <li class="dropdown site-menu-item has-sub">
              <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">Layouts</span>
                <span class="site-menu-arrow"></span>
              </a>
              <div class="dropdown-menu">
                <div class="site-menu-scroll-wrap is-list">
                  <div>
                    <div>
                      <ul class="site-menu-sub site-menu-normal-list">
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../layouts/grids.html">
                            <span class="site-menu-title">Grid Scaffolding</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../layouts/layout-grid.html">
                            <span class="site-menu-title">Layout Grid</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../layouts/headers.html">
                            <span class="site-menu-title">Different Headers</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../layouts/panel-transition.html">
                            <span class="site-menu-title">Panel Transition</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../layouts/boxed.html">
                            <span class="site-menu-title">Boxed Layout</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../layouts/two-columns.html">
                            <span class="site-menu-title">Two Columns</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../layouts/bordered-header.html">
                            <span class="site-menu-title">Bordered Header</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../layouts/page-aside-fixed.html">
                            <span class="site-menu-title">Page Aside Fixed</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="dropdown site-menu-item has-sub">
              <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                <span class="site-menu-title">Pages</span>
                <span class="site-menu-arrow"></span>
              </a>
              <div class="dropdown-menu">
                <div class="site-menu-scroll-wrap is-list">
                  <div>
                    <div>
                      <ul class="site-menu-sub site-menu-normal-list">
                        <li class="site-menu-item has-sub">
                          <a href="javascript:void(0)">
                            <span class="site-menu-title">Errors</span>
                            <span class="site-menu-arrow"></span>
                          </a>
                          <ul class="site-menu-sub">
                            <li class="site-menu-item">
                              <a class="animsition-link" href="../pages/error-400.html">
                                <span class="site-menu-title">400</span>
                              </a>
                            </li>
                            <li class="site-menu-item">
                              <a class="animsition-link" href="../pages/error-403.html">
                                <span class="site-menu-title">403</span>
                              </a>
                            </li>
                            <li class="site-menu-item">
                              <a class="animsition-link" href="../pages/error-404.html">
                                <span class="site-menu-title">404</span>
                              </a>
                            </li>
                            <li class="site-menu-item">
                              <a class="animsition-link" href="../pages/error-500.html">
                                <span class="site-menu-title">500</span>
                              </a>
                            </li>
                            <li class="site-menu-item">
                              <a class="animsition-link" href="../pages/error-503.html">
                                <span class="site-menu-title">503</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/faq.html">
                            <span class="site-menu-title">FAQ</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/gallery.html">
                            <span class="site-menu-title">Gallery</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/gallery-grid.html">
                            <span class="site-menu-title">Gallery Grid</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/search-result.html">
                            <span class="site-menu-title">Search Result</span>
                          </a>
                        </li>
                        <li class="site-menu-item has-sub">
                          <a href="javascript:void(0)">
                            <span class="site-menu-title">Maps</span>
                            <span class="site-menu-arrow"></span>
                          </a>
                          <ul class="site-menu-sub">
                            <li class="site-menu-item">
                              <a class="animsition-link" href="../pages/map-google.html">
                                <span class="site-menu-title">Google Maps</span>
                              </a>
                            </li>
                            <li class="site-menu-item">
                              <a class="animsition-link" href="../pages/map-vector.html">
                                <span class="site-menu-title">Vector Maps</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/maintenance.html">
                            <span class="site-menu-title">Maintenance</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/forgot-password.html">
                            <span class="site-menu-title">Forgot Password</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/lockscreen.html">
                            <span class="site-menu-title">Lockscreen</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/login.html">
                            <span class="site-menu-title">Login</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/register.html">
                            <span class="site-menu-title">Register</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/login-v2.html">
                            <span class="site-menu-title">Login V2</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/register-v2.html">
                            <span class="site-menu-title">Register V2</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/login-v3.html">
                            <span class="site-menu-title">Login V3</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/register-v3.html">
                            <span class="site-menu-title">Register V3</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/user.html">
                            <span class="site-menu-title">User List</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/invoice.html">
                            <span class="site-menu-title">Invoice</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/blank.html">
                            <span class="site-menu-title">Blank Page</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/email.html">
                            <span class="site-menu-title">Email</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/code-editor.html">
                            <span class="site-menu-title">Code Editor</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../pages/profile.html">
                            <span class="site-menu-title">Profile</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="site-menu-category">Elements</li>
            <li class="dropdown site-menu-item has-section has-sub">
              <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">UI</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="dropdown-menu site-menu-sub site-menu-section-wrap blocks-sm-3">
                <li class="site-menu-section site-menu-item has-sub">
                  <header>
                    <span class="site-menu-title">Basic UI</span>
                    <span class="site-menu-arrow"></span>
                  </header>
                  <div class="site-menu-scroll-wrap is-section">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-section-list">
                          <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                              <span class="site-menu-title">Panel</span>
                              <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                              <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/panel-structure.html">
                                  <span class="site-menu-title">Panel Structure</span>
                                </a>
                              </li>
                              <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/panel-actions.html">
                                  <span class="site-menu-title">Panel Actions</span>
                                </a>
                              </li>
                              <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/panel-portlets.html">
                                  <span class="site-menu-title">Panel Portlets</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/buttons.html">
                              <span class="site-menu-title">Buttons</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/dropdowns.html">
                              <span class="site-menu-title">Dropdowns</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/icons.html">
                              <span class="site-menu-title">Icons</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/list.html">
                              <span class="site-menu-title">List</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/tooltip-popover.html">
                              <span class="site-menu-title">Tooltip &amp; Popover</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/modals.html">
                              <span class="site-menu-title">Modals</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/tabs-accordions.html">
                              <span class="site-menu-title">Tabs &amp; Accordions</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/images.html">
                              <span class="site-menu-title">Images</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/badges-labels.html">
                              <span class="site-menu-title">Badges &amp; Labels</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/progress-bars.html">
                              <span class="site-menu-title">Progress Bars</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/carousel.html">
                              <span class="site-menu-title">Carousel</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/typography.html">
                              <span class="site-menu-title">Typography</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/colors.html">
                              <span class="site-menu-title">Colors</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../uikit/utilities.html">
                              <span class="site-menu-title">Utilties</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="site-menu-section site-menu-item has-sub active">
                  <header>
                    <span class="site-menu-title">Advanced UI</span>
                    <span class="site-menu-arrow"></span>
                  </header>
                  <div class="site-menu-scroll-wrap is-section">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-section-list">
                          <li class="site-menu-item hidden-xs site-tour-trigger">
                            <a href="javascript:void(0)">
                              <span class="site-menu-title">Tour</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../advanced/animation.html">
                              <span class="site-menu-title">Animation</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../advanced/highlight.html">
                              <span class="site-menu-title">Highlight</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../advanced/lightbox.html">
                              <span class="site-menu-title">Lightbox</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../advanced/scrollable.html">
                              <span class="site-menu-title">Scrollable</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../advanced/rating.html">
                              <span class="site-menu-title">Rating</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../advanced/context-menu.html">
                              <span class="site-menu-title">Context Menu</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../advanced/alertify.html">
                              <span class="site-menu-title">Alertify</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../advanced/masonry.html">
                              <span class="site-menu-title">Masonry</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../advanced/treeview.html">
                              <span class="site-menu-title">Treeview</span>
                            </a>
                          </li>
                          <li class="site-menu-item active">
                            <a class="animsition-link" href="../advanced/toastr.html">
                              <span class="site-menu-title">Toastr</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../advanced/maps-vector.html">
                              <span class="site-menu-title">Vector Maps</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../advanced/maps-google.html">
                              <span class="site-menu-title">Google Maps</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../advanced/sortable-nestable.html">
                              <span class="site-menu-title">Sortable &amp; Nestable</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../advanced/bootbox-sweetalert.html">
                              <span class="site-menu-title">Bootbox &amp; Sweetalert</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="site-menu-section site-menu-item has-sub">
                  <header>
                    <span class="site-menu-title">Structure</span>
                    <span class="site-menu-arrow"></span>
                  </header>
                  <div class="site-menu-scroll-wrap is-section">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-section-list">
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/alerts.html">
                              <span class="site-menu-title">Alerts</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/ribbon.html">
                              <span class="site-menu-title">Ribbon</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/pricing-tables.html">
                              <span class="site-menu-title">Pricing Tables</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/overlay.html">
                              <span class="site-menu-title">Overlay</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/cover.html">
                              <span class="site-menu-title">Cover</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/timeline-simple.html">
                              <span class="site-menu-title">Simple Timeline</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/timeline.html">
                              <span class="site-menu-title">Timeline</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/step.html">
                              <span class="site-menu-title">Step</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/comments.html">
                              <span class="site-menu-title">Comments</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/media.html">
                              <span class="site-menu-title">Media</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/chat.html">
                              <span class="site-menu-title">Chat</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/testimonials.html">
                              <span class="site-menu-title">Testimonials</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/nav.html">
                              <span class="site-menu-title">Nav</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/navbars.html">
                              <span class="site-menu-title">Navbars</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/blockquotes.html">
                              <span class="site-menu-title">Blockquotes</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/pagination.html">
                              <span class="site-menu-title">Pagination</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../structure/breadcrumbs.html">
                              <span class="site-menu-title">Breadcrumbs</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown site-menu-item has-section has-sub">
              <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                <span class="site-menu-title">Compents</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="dropdown-menu site-menu-sub site-menu-section-wrap blocks-sm-3">
                <li class="site-menu-section site-menu-item has-sub">
                  <header>
                    <span class="site-menu-title">Forms</span>
                    <span class="site-menu-arrow"></span>
                  </header>
                  <div class="site-menu-scroll-wrap is-section">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-section-list">
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../forms/general.html">
                              <span class="site-menu-title">General Elements</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../forms/material.html">
                              <span class="site-menu-title">Material Elements</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../forms/advanced.html">
                              <span class="site-menu-title">Advanced Elements</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../forms/layouts.html">
                              <span class="site-menu-title">Form Layouts</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../forms/wizard.html">
                              <span class="site-menu-title">Form Wizard</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../forms/validation.html">
                              <span class="site-menu-title">Form Validation</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../forms/masks.html">
                              <span class="site-menu-title">Form Masks</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../forms/editable.html">
                              <span class="site-menu-title">Form Editable</span>
                            </a>
                          </li>
                          <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                              <span class="site-menu-title">Editors</span>
                              <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                              <li class="site-menu-item">
                                <a class="animsition-link" href="../forms/editor-summernote.html">
                                  <span class="site-menu-title">Summernote</span>
                                </a>
                              </li>
                              <li class="site-menu-item">
                                <a class="animsition-link" href="../forms/editor-markdown.html">
                                  <span class="site-menu-title">Markdown</span>
                                </a>
                              </li>
                              <li class="site-menu-item">
                                <a class="animsition-link" href="../forms/editor-ace.html">
                                  <span class="site-menu-title">Ace Editor</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../forms/image-cropping.html">
                              <span class="site-menu-title">Image Cropping</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../forms/file-uploads.html">
                              <span class="site-menu-title">File Uploads</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="site-menu-section site-menu-item has-sub">
                  <header>
                    <span class="site-menu-title">Tables</span>
                    <span class="site-menu-arrow"></span>
                  </header>
                  <div class="site-menu-scroll-wrap is-section">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-section-list">
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../tables/basic.html">
                              <span class="site-menu-title">Basic Tables</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../tables/bootstrap.html">
                              <span class="site-menu-title">Bootstrap Tables</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../tables/floatthead.html">
                              <span class="site-menu-title">floatThead</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../tables/responsive.html">
                              <span class="site-menu-title">Responsive Tables</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../tables/editable.html">
                              <span class="site-menu-title">Editable Tables</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../tables/jsgrid.html">
                              <span class="site-menu-title">jsGrid</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../tables/footable.html">
                              <span class="site-menu-title">FooTable</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../tables/datatable.html">
                              <span class="site-menu-title">DataTables</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="site-menu-section site-menu-item has-sub">
                  <header>
                    <span class="site-menu-title">Chart</span>
                    <span class="site-menu-arrow"></span>
                  </header>
                  <div class="site-menu-scroll-wrap is-section">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-section-list">
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../charts/chartjs.html">
                              <span class="site-menu-title">Chart.js</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../charts/gauges.html">
                              <span class="site-menu-title">Gauges</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../charts/flot.html">
                              <span class="site-menu-title">Flot</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../charts/peity.html">
                              <span class="site-menu-title">Peity</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../charts/sparkline.html">
                              <span class="site-menu-title">Sparkline</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../charts/morris.html">
                              <span class="site-menu-title">Morris</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../charts/chartist.html">
                              <span class="site-menu-title">Chartist.js</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../charts/rickshaw.html">
                              <span class="site-menu-title">Rickshaw</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../charts/pie-progress.html">
                              <span class="site-menu-title">Pie Progress</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="../charts/c3.html">
                              <span class="site-menu-title">C3</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown site-menu-item has-sub">
              <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon wb-extension" aria-hidden="true"></i>
                <span class="site-menu-title">Widgets</span>
                <span class="site-menu-arrow"></span>
              </a>
              <div class="dropdown-menu">
                <div class="site-menu-scroll-wrap is-list">
                  <div>
                    <div>
                      <ul class="site-menu-sub site-menu-normal-list">
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../widgets/statistics.html">
                            <span class="site-menu-title">Statistics Widgets</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../widgets/data.html">
                            <span class="site-menu-title">Data Widgets</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../widgets/blog.html">
                            <span class="site-menu-title">Blog Widgets</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../widgets/chart.html">
                            <span class="site-menu-title">Chart Widgets</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../widgets/social.html">
                            <span class="site-menu-title">Social Widgets</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../widgets/weather.html">
                            <span class="site-menu-title">Weather Widgets</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="site-menu-category">Apps</li>
            <li class="dropdown site-menu-item has-sub">
              <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                <span class="site-menu-title">Apps</span>
                <span class="site-menu-arrow"></span>
              </a>
              <div class="dropdown-menu">
                <div class="site-menu-scroll-wrap is-list">
                  <div>
                    <div>
                      <ul class="site-menu-sub site-menu-normal-list">
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../apps/contacts/contacts.html">
                            <span class="site-menu-title">Contacts</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../apps/calendar/calendar.html">
                            <span class="site-menu-title">Calendar</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../apps/notebook/notebook.html">
                            <span class="site-menu-title">Notebook</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../apps/taskboard/taskboard.html">
                            <span class="site-menu-title">Taskboard</span>
                          </a>
                        </li>
                        <li class="site-menu-item has-sub">
                          <a href="javascript:void(0)">
                            <span class="site-menu-title">Documents</span>
                            <span class="site-menu-arrow"></span>
                          </a>
                          <ul class="site-menu-sub">
                            <li class="site-menu-item">
                              <a class="animsition-link" href="../apps/documents/articles.html">
                                <span class="site-menu-title">Articles</span>
                              </a>
                            </li>
                            <li class="site-menu-item">
                              <a class="animsition-link" href="../apps/documents/categories.html">
                                <span class="site-menu-title">Categories</span>
                              </a>
                            </li>
                            <li class="site-menu-item">
                              <a class="animsition-link" href="../apps/documents/article.html">
                                <span class="site-menu-title">Article</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../apps/forum/forum.html">
                            <span class="site-menu-title">Forum</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../apps/message/message.html">
                            <span class="site-menu-title">Message</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../apps/projects/projects.html">
                            <span class="site-menu-title">Projects</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../apps/mailbox/mailbox.html">
                            <span class="site-menu-title">Mailbox</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../apps/media/overview.html">
                            <span class="site-menu-title">Media</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../apps/work/work.html">
                            <span class="site-menu-title">Work</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a class="animsition-link" href="../apps/location/location.html">
                            <span class="site-menu-title">Location</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <ol class="breadcrumb">
        <li><a href="../index.html">Home</a></li>
        <li class="active">Advanced UI</li>
      </ol>
      <h1 class="page-title">Toastr</h1>
      <div class="page-header-actions">
        <a class="btn btn-sm btn-inverse btn-round" href="http://www.toastrjs.com" target="_blank">
          <i class="icon wb-link" aria-hidden="true"></i>
          <span class="hidden-xs">Official Website</span>
        </a>
      </div>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <!-- Example Simple Alerts -->
          <div class="example-wrap">

            <button class="example-title" id="exampleTopLeft" data-plugin="toastr" data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            data-container-id="toast-top-left" data-position-class="toast-top-left"
            >Top Left</button>


              <?php //echo $this->session->flashdata('pesan');?>
              <div    <?php echo $this->session->flashdata('pesan')?> >hahah</div>
              <div class="alert alert-success">

             </div>
            <h4 class="example-title">Simple Alerts</h4>
            <p>Provide contextual feedback messages for typical user actions with
              the handful of available and flexible alert messages. We provide
              two alerts style for you to choice by switching class <code>.toast-shadow</code>              and <code>.toast</code>. Wrap any text and an optional dismiss button
              in <code>.toast</code> and one of the four contextual classes (e.g.,
              <code>.toast-info</code>) for basic alert messages. </p>
            <div class="row">
              <div class="col-sm-6">
                <div class="example-wrap">
                  <div class="toast-example" id="exampleToastrInfo" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Heads up!&lt;/strong&gt; This alert needs your attention, but it's not super important."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-info" role="alert">
                    <div class="toast toast-just-text toast-info">
                      <button class="toast-close-button" aria-label="Close" type="button" role="button">
                        <span aria-hidden="true">×</span>
                      </button>
                      <div class="toast-message">
                        <strong>Heads up!</strong> This alert needs your attention, but
                        it's not super important.</div>
                    </div>
                  </div>
                  <div class="toast-example" id="exampleToastrSuccess" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-success" role="alert">
                    <div class="toast toast-just-text toast-success">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <div class="toast-message">
                        <strong>Well done!</strong> You successfully read this important
                        alert message.</div>
                    </div>
                  </div>
                  <div class="toast-example" id="exampleToastrError" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Oh snap!&lt;/strong&gt; Change a few things up and try submitting again."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-error" role="alert">
                    <div class="toast toast-just-text toast-error">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <div class="toast-message">
                        <strong>Oh snap!</strong> Change a few things up and try submitting
                        again.
                      </div>
                    </div>
                  </div>
                  <div class="toast-example" id="exampleToastrWarning" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;WARNING:&lt;/strong&gt; Better check yourself, you're not looking too good."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-warning" role="alert">
                    <div class="toast toast-just-text toast-warning">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <div class="toast-message">
                        <strong>WARNING:</strong> Better check yourself, you're not looking
                        too good.</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="example-wrap">
                  <div class="toast-example" id="exampleToastrInfoShadow" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Heads up!&lt;/strong&gt; This alert needs your attention, but it's not super important."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-info toast-shadow" role="alert">
                    <div class="toast toast-just-text toast-shadow toast-info">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <div class="toast-message">
                        <strong>Heads up!</strong> This alert needs your attention, but
                        it's not super important.</div>
                    </div>
                  </div>
                  <div class="toast-example" id="exampleToastrSuccessShadow" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-success toast-shadow"
                  role="alert">
                    <div class="toast toast-just-text toast-shadow toast-success">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <div class="toast-message">
                        <strong>Well done!</strong> You successfully read this important
                        alert message.</div>
                    </div>
                  </div>
                  <div class="toast-example" id="exampleToastrErrorShadow" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-error toast-shadow" role="alert">
                    <div class="toast toast-just-text toast-shadow toast-error">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <div class="toast-message">
                        <strong>Oh snap!</strong> Change a few things up and try submitting
                        again.
                      </div>
                    </div>
                  </div>
                  <div class="toast-example" id="exampleToastrWarningShadow" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-warning toast-shadow"
                  role="alert">
                    <div class="toast toast-just-text toast-shadow toast-warning">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <div class="toast-message">
                        <strong>WARNING:</strong> Better check yourself, you're not looking
                        too good.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Example Simple Alerts -->
          <div class="row">
            <div class="col-sm-12">
              <!-- Example Positions -->
              <div class="example-wrap">
                <h4 class="example-title">Positions</h4>
                <p>Click the button below you will see the notification display from
                  four direction on the screen.</p>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="example-wrap">
                      <div class="bg-blue-grey-100 position-example">
                        <div class="text-center">
                          <div class="row">
                            <div class="col-sm-4 margin-bottom-10">
                              <a class="btn btn-block btn-primary" id="exampleTopLeft" data-plugin="toastr" data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                              data-container-id="toast-top-left" data-position-class="toast-top-left"
                              href="javascript:void(0)" role="button">Top Left</a>
                            </div>
                            <div class="col-sm-4 margin-bottom-10">
                              <a class="btn btn-block btn-primary" id="exampleTopCenter" data-plugin="toastr"
                              data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                              data-container-id="toast-top-center" data-position-class="toast-top-center"
                              href="javascript:void(0)" role="button">Top Center</a>
                            </div>
                            <div class="col-sm-4 margin-bottom-10">
                              <a class="btn btn-block btn-primary" id="exampleTopRight" data-plugin="toastr"
                              data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                              data-container-id="toast-top-right" data-position-class="toast-top-right"
                              href="javascript:void(0)" role="button">Top Right</a>

                            </div>
                          </div>
                        </div>
                        <div class="text-center" style="bottom: 0;">
                          <div class="row">
                            <div class="col-sm-4 margin-top-10">
                              <a class="btn btn-block btn-primary" id="exampleBottomLeft" data-plugin="toastr"
                              data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                              data-container-id="toast-bottom-left" data-position-class="toast-bottom-left"
                              href="aaa" >Bottom Left</a>
                            </div>
                            <div class="col-sm-4 margin-top-10">
                              <a class="btn btn-block btn-primary" id="exampleBottomCenter" data-plugin="toastr"
                              data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                              data-container-id="toast-bottom-center" data-position-class="toast-bottom-center"
                              href="javascript:void(0)" role="button">Bottom Center</a>
                            </div>
                            <div class="col-sm-4 margin-top-10">
                              <a class="btn btn-block btn-primary" id="exampleBottomRight" data-plugin="toastr"
                              data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                              data-container-id="toast-bottom-right" data-position-class="toast-bottom-right"
                              href="javascript:void(0)" role="button">Bottom Right</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="example-wrap">
                      <div class="bg-blue-grey-100 position-example padding-20">
                        <a class="btn btn-primary btn-block" id="exampleTopFullWidth" data-plugin="toastr"
                        data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                        data-container-id="toast-topFullWidth" data-position-class="toast-top-full-width"
                        data-show-method="slideDown" href="javascript:void(0)"
                        role="button">Top Full Width</a>
                        <a class="btn btn-primary btn-block" id="exampleBottomFullWidth" data-plugin="toastr"
                        data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                        data-container-id="toast-bottomFullWidth" data-position-class="toast-bottom-full-width"
                        data-show-method="slideDown" href="javascript:void(0)"
                        role="button">Bottom Full Width</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Positions -->
            </div>
          </div>
          <div class="row row-lg">
            <div class="col-lg-4 col-sm-6">
              <!-- Example Just Text Notifacations -->
              <div class="example-wrap">
                <h4 class="example-title">Just Text Notifacations</h4>
                <p>This notification was just texts included, use the class.</p>
                <div class="example">
                  <div class="toast-example padding-0" aria-live="polite" role="alert">
                    <div class="toast toast-just-text toast-info">
                      <div class="toast-title">Message</div>
                      <div class="toast-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    </div>
                  </div>
                  <a class="btn btn-primary btn-outline" id="exampleJustText" data-plugin="toastr"
                  data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-container-id="toast-top-right" data-title="Messages" data-icon-class="toast-just-text toast-info"
                  href="javascript:void(0)" role="button">Generate</a>
                </div>
              </div>
              <!-- End Example Just Text Notifacations -->
            </div>
            <div class="col-lg-4 col-sm-6">
              <!-- Exmaple Close Button Notifacations -->
              <div class="example-wrap">
                <h4 class="example-title">Close Button Notifacations</h4>
                <p>You can close this notification with clicking close icon.</p>
                <div class="example">
                  <div class="toast-example padding-0" aria-live="polite" role="alert">
                    <div class="toast toast-just-text toast-info">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <div class="toast-message">Messages</div>
                      <div class="toast-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    </div>
                  </div>
                  <a class="btn btn-primary btn-outline" id="exampleCloseButton" data-plugin="toastr"
                  data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-title="Messages" data-container-id="toast-top-right" data-close-button="true"
                  data-tap-to-dismiss="false" data-icon-class="toast-just-text toast-info"
                  href="javascript:void(0)" role="button">Generate</a>
                </div>
              </div>
              <!-- End Exmaple Close Button Notifacations -->
            </div>
            <div class="col-lg-4 col-sm-6">
              <!-- Example Progress Notifications -->
              <div class="example-wrap">
                <h4 class="example-title">Progress Notifications</h4>
                <p>Visually indicate how long before a toast expires.</p>
                <div class="example">
                  <div class="toast-example padding-0" aria-live="polite" role="alert">
                    <div class="toast toast-just-text toast-info">
                      <div class="toast-progress" style="width: 62.82%;"></div>
                      <div class="toast-title">Messages</div>
                      <div class="toast-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    </div>
                  </div>
                  <a class="btn btn-primary btn-outline" id="exampleProgressBar" data-plugin="toastr"
                  data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-title="Messages" data-container-id="toast-top-right" data-progress-bar="true"
                  data-icon-class="toast-just-text toast-info" href="javascript:void(0)"
                  role="button">Progress Bar</a>
                </div>
              </div>
              <!-- End Example Progress Notifications -->
            </div>
            <div class="clearfix visible-lg-block"></div>
            <div class="col-sm-6">
              <!-- Example Delay And Sticky -->
              <div class="example-wrap margin-sm-0">
                <h4 class="example-title">Delay And Sticky</h4>
                <p>You can define via <code>timeout</code> for what amount of time
                  in milliseconds a message is visible. You can also create a sticky
                  message by setting the timeout to zero.</p>
                <div class="example example-buttons">
                  <a class="btn btn-primary btn-outline" id="exampleDelay5s" data-plugin="toastr"
                  data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-container-id="toast-top-right" data-time-out="5000" href="javascript:void(0)"
                  role="button">Delay 5s</a>
                  <a class="btn btn-primary btn-outline" id="sticky" data-plugin="toastr" data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-container-id="toast-top-right" data-time-out="0" href="javascript:void(0)"
                  role="button">Sticky</a>
                </div>
              </div>
              <!-- End Example Delay And Sticky -->
            </div>
            <div class="clearfix visible-md-block visible-sm-block"></div>
            <div class="col-sm-6">
              <!-- Example Effect -->
              <div class="example-wrap">
                <h4 class="example-title">Effect</h4>
                <p>Use the jQuery show/hide method of your choice. These default to
                  fadeIn/fadeOut. The methods fadeIn/fadeOut, slideDown/slideUp,
                  and show/hide are built into jQuery.</p>
                <div class="example example-buttons">
                  <a class="btn btn-primary btn-outline" id="fadeIn" data-plugin="toastr" data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-container-id="toast-top-right" data-show-method="fadeIn"
                  href="javascript:void(0)" role="button">FadeIn</a>
                  <a class="btn btn-primary btn-outline" id="slideDown" data-plugin="toastr" data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-container-id="toast-top-right" data-show-method="slideDown"
                  href="javascript:void(0)" role="button">SlideDown</a>
                </div>
              </div>
              <!-- End Example Effect -->

			  <div class="container text-center">
	<br/>
		<h2>Jquery - notification popup box using toastr JS Plugin</h2>

	<br/>
	<button class="success btn btn-success">Success</button>
	<button class="error btn btn-danger">Error</button>
	<button class="info btn btn-info">Info</button>
	<button class="warning btn btn-warning">Warning</button>
</div>

<script type="text/javascript">
	$(".success").click(function(){
		toastr.success('We do have the Kapua suite available.', 'Success Alert', {timeOut: 5000})
	});
	$(".error").click(function(){
		toastr.error('You Got Error', 'Inconceivable!', {timeOut: 5000})
	});
	$(".info").click(function(){
		toastr.info('It is for your kind information', 'Information', {timeOut: 5000})
	});
	$(".warning").click(function(){
		toastr.warning('It is for your kind warning', 'Warning', {timeOut: 5000})
	});
</script>


            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Notifications -->
    </div>
  </div>
  <!-- End Page -->
  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© 2016 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
    </div>
  </footer>
  <!-- Core  -->
  <script src="<?php site_url(); ?>global/vendor/jquery/jquery.js"></script>
  <script src="<?php site_url(); ?>global/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php site_url(); ?>global/vendor/animsition/animsition.js"></script>
  <script src="<?php site_url(); ?>global/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php site_url(); ?>global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php site_url(); ?>global/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php site_url(); ?>global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
  <!-- Plugins -->
  <script src="<?php site_url(); ?>global/vendor/switchery/switchery.min.js"></script>
  <script src="<?php site_url(); ?>global/vendor/intro-js/intro.js"></script>
  <script src="<?php site_url(); ?>global/vendor/screenfull/screenfull.js"></script>
  <script src="<?php site_url(); ?>global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="<?php site_url(); ?>global/vendor/toastr/toastr.js"></script>
  <!-- Scripts -->
  <script src="<?php site_url(); ?>global/js/core.js"></script>
  <script src="<?php site_url(); ?>assets/js/site.js"></script>
  <script src="<?php site_url(); ?>assets/js/sections/menu.js"></script>
  <script src="<?php site_url(); ?>assets/js/sections/menubar.js"></script>
  <script src="<?php site_url(); ?>assets/js/sections/sidebar.js"></script>
  <script src="<?php site_url(); ?>global/js/configs/config-colors.js"></script>
  <script src="<?php site_url(); ?>assets/js/configs/config-tour.js"></script>
  <script src="<?php site_url(); ?>global/js/components/asscrollable.js"></script>
  <script src="<?php site_url(); ?>global/js/components/animsition.js"></script>
  <script src="<?php site_url(); ?>global/js/components/slidepanel.js"></script>
  <script src="<?php site_url(); ?>global/js/components/switchery.js"></script>
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
