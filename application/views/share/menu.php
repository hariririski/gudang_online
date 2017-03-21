<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
    data-toggle="menubar">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-bar"></span>
    </button>
    <button width="100%" type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
    data-toggle="collapse">
      <i class="icon wb-more-horizontal" aria-hidden="true"></i>
    </button>
    <a class="navbar-brand navbar-brand-center" href="<?php echo site_url();?>home">
      <img  class="navbar-brand-logo navbar-brand-logo-normal"  src="<?php echo site_url(); ?>assets/images/log.png" width="500%"alt="...">
      <img class="navbar-brand-logo navbar-brand-logo-special" src="<?php echo site_url(); ?>assets/images/log.png" width="500%"alt="...">
    </a>

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
       <!--  <li class="hidden-xs" id="toggleFullscreen">
          <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
            <span class="sr-only">Toggle fullscreen</span>
          </a>
        </li> -->

        <!-- <li class="dropdown dropdown-fw dropdown-mega">
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
                          <img class="width-full" src="global/photos/placeholder.png" alt="..."
                          />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail margin-0" href="javascript:void(0)">
                          <img class="width-full" src="global/photos/placeholder.png" alt="..."
                          />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail margin-0" href="javascript:void(0)">
                          <img class="width-full" src="global/photos/placeholder.png" alt="..."
                          />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail margin-0" href="javascript:void(0)">
                          <img class="width-full" src="global/photos/placeholder.png" alt="..."
                          />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail margin-0" href="javascript:void(0)">
                          <img class="width-full" src="global/photos/placeholder.png" alt="..."
                          />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail margin-0" href="javascript:void(0)">
                          <img class="width-full" src="global/photos/placeholder.png" alt="..."
                          />
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <h5 class="margin-bottom-0">Accordion</h5>

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

                  </div>
                </div>
              </div>
            </li>
          </ul>

        </li> -->
      </ul>
      <!-- End Navbar Toolbar -->
      <!-- Navbar Toolbar Right -->
      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

        <!-- <li class="dropdown">
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
                          <img src="<?php echo site_url(); ?>global/portraits/2.jpg" alt="..." />
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
                          <img src="<?php echo site_url(); ?>global/portraits/3.jpg" alt="..." />
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
                          <img src="<?php echo site_url(); ?>global/portraits/4.jpg" alt="..." />
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
                          <img src="<?php echo site_url(); ?>global/portraits/5.jpg" alt="..." />
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
        </li> -->
        <li class="dropdown">
          <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
          data-animation="scale-up" role="button">
            <span class="avatar avatar-online">
              <?php
              $admin=$this->session->userdata('admin');
        			$super_admin=$this->session->userdata('super_admin');
              if( empty($admin)==0 ){
              ?>

                <img src="<?php echo site_url(); ?>assets/images/admin.png" width="50%">

              <?php

            }else if(empty($super_admin)==0){
              ?>
              <img src="<?php echo site_url(); ?>assets/images/super_admin.png" width="50%">
              <?php

              }
               ?>
              <i></i>
            </span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li role="presentation">
              <a href="javascript:void(0)" role="menuitem"><i class="icon wb-info" aria-hidden="true"></i>
                <?php
                $admin=$this->session->userdata('admin');
                $super_admin=$this->session->userdata('super_admin');
                if( empty($admin)==0){
                ?>

                <span class="label label-info">Admin</span>
                <?php

              }else if(empty($super_admin)==0){
                ?>

                  <span class="label label-danger"> Super Admin</span>
                <?php

                }
                 ?>

              </a>
            </li>
            <li role="presentation">
              <a href="<?php site_url();?>data_profil" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
            </li>


            <li class="divider" role="presentation"></li>
            <li role="presentation">
              <a href="<?php site_url();?>login/logout" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
            </li>
          </ul>
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
          <li class="dropdown site-menu-item has-sub <?php $link=uri_string(); if($link =="home"){ echo "active";} ?>">
            <a class="dropdown-toggle" href="<?php echo site_url(); ?>home" data-dropdown-toggle="false">
              <i class="site-menu-icon wb-home" aria-hidden="true"></i>
              <span class="site-menu-title">Home</span>

            </a>
          </li>

          <li class="dropdown site-menu-item has-section has-sub <?php $link=uri_string(); if($link =="tambah_faktur"|| $link =="faktur" || $link =="tambah_barang"|| $link =="tambah_persediaan_barang"||$link =="persediaan_barang"){ echo "active";} ?>">
            <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
              <i class="site-menu-icon wb-book " aria-hidden="true"></i>
              <span class="site-menu-title">Barang Masuk </span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="dropdown-menu site-menu-sub site-menu-section-wrap blocks-sm-3">
              <li class="site-menu-section site-menu-item has-sub">
                <header>
                  <span class="site-menu-title">Barang Masuk</span>
                  <span class="site-menu-arrow"></span>
                </header>
                <div class="site-menu-scroll-wrap is-section">
                  <div>
                    <div>
                      <ul class="site-menu-sub site-menu-section-list">
                        <li class="site-menu-item <?php $link=uri_string(); if($link =="tambah_faktur"){ echo "active";} ?>">
                          <a class="animsition-link" href="<?php site_url(); ?>tambah_faktur">
                            <span class="site-menu-title">Tambah Faktur</span>
                          </a>
                        </li>
                        <li class="site-menu-item <?php $link=uri_string(); if($link =="faktur"){ echo "active";} ?>">
                          <a class="animsition-link" href="<?php site_url(); ?>faktur">
                            <span class="site-menu-title">Data Faktur</span>
                          </a>
                        </li>
                        <li class="site-menu-item <?php $link=uri_string(); if($link =="tambah_barang"){ echo "active";} ?>">
                          <a class="animsition-link" href="<?php site_url(); ?>tambah_barang">
                            <span class="site-menu-title">Tambah Barang</span>
                          </a>
                        </li>
                        <!-- <li class="site-menu-item <?php $link=uri_string(); if($link =="tambah_persediaan_barang"){ echo "active";} ?>">
                          <a class="animsition-link" href="<?php site_url(); ?>tambah_persediaan_barang">
                            <span class="site-menu-title">Tambah Persediaan Barang</span>
                          </a>
                        </li> -->
                        <!-- <li class="site-menu-item <?php $link=uri_string(); if($link =="persediaan_barang"){ echo "active";} ?>">
                          <a class="animsition-link" href="<?php site_url(); ?>persediaan_barang">
                            <span class="site-menu-title">Data Persedian Barang</span>
                          </a>
                        </li> -->
                      </ul>
                    </div>
                  </div>
                </div>
              </li>

              </ul>
          </li>

          <li class="dropdown site-menu-item has-section has-sub  <?php $link=uri_string(); if($link =="ambil_barang"||$link =="data_pengambilan_barang"){ echo "active";} ?>">
            <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
              <i class="site-menu-icon wb-book" aria-hidden="true"></i>
              <span class="site-menu-title">Barang Keluar</span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="dropdown-menu site-menu-sub site-menu-section-wrap blocks-sm-3">
              <li class="site-menu-section site-menu-item has-sub">
                <header>
                  <span class="site-menu-title">Pengambilan Barang</span>
                  <span class="site-menu-arrow"></span>
                </header>
                <div class="site-menu-scroll-wrap is-section">
                  <div>
                    <div>
                      <ul class="site-menu-sub site-menu-section-list">
                        <li class="site-menu-item <?php $link=uri_string(); if($link =="ambil_barang"){ echo "active";} ?>">
                          <a class="animsition-link" href="<?php site_url();?>ambil_barang">
                            <span class="site-menu-title">Ambil Barang</span>
                          </a>
                        </li>
                        <li class="site-menu-item <?php $link=uri_string(); if($link =="data_pengambilan_barang"){ echo "active";} ?>">
                          <a class="animsition-link" href="<?php site_url();?>data_pengambilan_barang">
                            <span class="site-menu-title">Data Pengambilan Barang </span>
                          </a>
                        </li>
                      </div>
                  </div>
                </div>
              </li>
              <li class="site-menu-section site-menu-item has-sub">

              </ul>
          </li>

          <li class="dropdown site-menu-item has-section has-sub <?php $link=uri_string(); if($link =="tipe_barang"||$link =="satuan_barang"||$link =="jenis_penerima"||$link =="penerima_barang"||$link =="tipe_faktur"||$link =="sumber_dana"||$link =="admin"||$link =="backup_databases"||$link =="ttd"){ echo "active";} ?>">
            <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
              <i class="site-menu-icon wb-settings" aria-hidden="true"></i>
              <span class="site-menu-title">Settings</span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="dropdown-menu site-menu-sub site-menu-section-wrap blocks-sm-3">
              <li class="site-menu-section site-menu-item has-sub">
                <header>
                  <span class="site-menu-title">Umum</span>
                  <span class="site-menu-arrow"></span>
                </header>
                <div class="site-menu-scroll-wrap is-section">
                  <div>
                    <div>
                      <ul class="site-menu-sub site-menu-section-list">
                        <li class="site-menu-item <?php $link=uri_string(); if($link =="tipe_barang"){ echo "active";} ?>">
                          <a class="animsition-link"  href="<?php site_url();?>tipe_barang">
                            <span class="site-menu-title">Tipe barang</span>
                          </a>
                        </li>
                        <li class="site-menu-item <?php $link=uri_string(); if($link =="satuan_barang"){ echo "active";} ?>">
                          <a class="animsition-link"  href="<?php site_url();?>satuan_barang">
                            <span class="site-menu-title">Satuan barang</span>
                          </a>
                        </li>
                        <li class="site-menu-item <?php $link=uri_string(); if($link =="jenis_penerima"){ echo "active";} ?>">
                          <a class="animsition-link"  href="<?php site_url();?>jenis_penerima">
                            <span class="site-menu-title">Jenis Penerima</span>
                          </a>
                        </li>
                        <li class="site-menu-item <?php $link=uri_string(); if($link =="penerima_barang"){ echo "active";} ?>">
                          <a class="animsition-link"  href="<?php site_url();?>penerima_barang">
                            <span class="site-menu-title">Penerima Barang</span>
                          </a>
                        </li>
                        <li class="site-menu-item <?php $link=uri_string(); if($link =="detail_penerima_barang"){ echo "active";} ?>">
                          <a class="animsition-link"  href="<?php site_url();?>detail_penerima_barang">
                            <span class="site-menu-title">Bidang Penerima Barang</span>
                          </a>
                        </li>
                        <li class="site-menu-item <?php $link=uri_string(); if($link =="tipe_faktur"){ echo "active";} ?>">
                          <a class="animsition-link" href="<?php site_url();?>tipe_faktur">
                            <span class="site-menu-title">Tipe Faktur</span>
                          </a>
                        </li>
                        <li class="site-menu-item <?php $link=uri_string(); if($link =="sumber_dana"){ echo "active";} ?>">
                          <a class="animsition-link"  href="<?php site_url();?>sumber_dana">
                            <span class="site-menu-title">Sumber Dana</span>
                          </a>
                        </li>
                      </li>
                      <li class="site-menu-item <?php $link=uri_string(); if($link =="ttd"){ echo "active";} ?>">
                        <a class="animsition-link"  href="<?php site_url();?>ttd">
                          <span class="site-menu-title">TTD</span>
                        </a>
                      </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <?php

              $super_admin=$this->session->userdata('super_admin');
              if(!empty($super_admin)==1){
              ?>
                <li class="site-menu-section site-menu-item has-sub">
                  <header>
                    <span class="site-menu-title">Administrator</span>
                    <span class="site-menu-arrow"></span>
                  </header>
                  <div class="site-menu-scroll-wrap is-section">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-section-list">
                          <li class="site-menu-item <?php $link=uri_string(); if($link =="admin"){ echo "active";} ?>">
                            <a class="animsition-link" href="<?php site_url();?>admin">
                              <span class="site-menu-title">Data Administrator</span>
                            </a>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              <?php
              }
              ?>

              <li class="site-menu-section site-menu-item has-sub">
                <header>
                  <span class="site-menu-title">Tools</span>
                  <span class="site-menu-arrow"></span>
                </header>
                <div class="site-menu-scroll-wrap is-section">
                  <div>
                    <div>
                      <ul class="site-menu-sub site-menu-section-list">
                        <li class="site-menu-item <?php $link=uri_string(); if($link =="backup_databases"){ echo "active";} ?>">
                          <a class="animsition-link" href="<?php site_url();?>backup_databases">
                            <span class="site-menu-title">Backup Databases</span>
                          </a>
                        </li>
                        </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>






        </ul>
      </div>
    </div>
  </div>
</div>
