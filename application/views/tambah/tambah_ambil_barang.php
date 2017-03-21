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
  <script type="text/javascript" src="<?php echo base_url()?>assets/jquery_combo.js"></script> <!-- ajax-bertingkat -->

<script type='text/javascript'>



    $(document).ready(function() {
      $("#jenis_penerima").change(function(){
        var jenis_penerima = $("#jenis_penerima").val();
        $.ajax({
          type: "POST",
          url: "<?php echo base_url(); ?>ambil_barang/jenis_penerima/"+jenis_penerima,
          data: "jenis_peneriman="+jenis_penerima,
          success: function(data){
            $("#penerima_barang").html(data);
          }
        });
      });
    });

    $(document).ready(function() {
      $("#penerima_barang").change(function(){
        var penerima_barang = $("#penerima_barang").val();
        $.ajax({
          type: "POST",
          url: "<?php echo base_url(); ?>ambil_barang/penerima_barang/"+penerima_barang,
          data: "penerima_barangn="+penerima_barang,
          success: function(data){
            $("#detail_penerima_barang").html(data);
          }
        });
      });
    });


      </script>
</head>
<body class="site-navbar-small "  <?php echo $this->session->flashdata('pesan')?>>

 <div class="toast-example" id="berhasil_edit" aria-live="polite" data-plugin="toastr" data-message="<strong>Selamat !</strong> Anda Berhasil Mengedit Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-success toast-shadow" role="alert"></div>
  <div class="toast-example" id="gagal_edit" aria-live="polite" data-plugin="toastr" data-message="<strong>Maaf !</strong> Anda Gagal Mengedit Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-error toast-shadow" role="alert"></div>

    <div class="toast-example" id="berhasil_hapus" aria-live="polite" data-plugin="toastr" data-message="<strong>Selamat !</strong> Anda Berhasil Menghapus Data."  data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-success toast-shadow" role="alert"></div>
    <div class="toast-example" id="gagal_hapus" aria-live="polite" data-plugin="toastr" data-message="<strong>Maaf !</strong> Anda Gagal Menambahkan Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-error toast-shadow" role="alert"></div>

     <div class="toast-example" id="berhasil" aria-live="polite" data-plugin="toastr" data-message="<strong>Selamat !</strong> Anda Berhasil Menambahkan Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-success toast-shadow" role="alert"></div>
    <div class="toast-example" id="gagal" aria-live="polite" data-plugin="toastr" data-message="<strong>Maaf !</strong> Anda Gagal Menambahkan Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-error toast-shadow" role="alert"></div>
    <div class="toast-example" id="belum_finalisasi" aria-live="polite" data-plugin="toastr" data-message="<strong>Maaf !</strong> Ada Pengambilan Barang Yang Belum Di Finalisasi." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-warning toast-shadow" role="alert"></div>


  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<?php echo $this->load->view('share/menu', '', TRUE);?>
  <div class="page animsition">
    <div class="page-header">


    </div>
    <div class="page-content">
      <!-- Panel Basic -->
      <?php
      foreach($belum_finalisasi as $data){
          if($data->status > 0){
      ?>
      <div class="alert alert-icon alert-danger alert-dismissible alert dark alert-alt" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                  <table  width="95%" border="0">
                    <tr >
                      <td>
                        <i class="icon wb-bell" aria-hidden="true"></i> Anda belum Memfinalisasi <?php echo $data->status ?> Faktur Pengambilan Barang sehingga anda tidak dapat melakukan Pengambilan kembali, Sampai semua Faktur sudah Difinalisasi.
                      </td>

                    </tr>
                  </table>

      </div>
      <?php
    } }
      ?>
    <div class="panel panel-bordered">
              <div class="panel-heading">
                <h3 class="panel-title">Tambah Pengambilan Barang</h3>
              </div>
              <div class="panel-body">

                <div class="col-sm-12 col-md-12">
                <!-- Example Horizontal Form -->
                <div class="example-wrap">

                  <div class="example">
                    <form class="form-horizontal" action="ambil_barang/tambah_penerima_barang_keluar" method="POST">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Penerima :</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="jenis_penerima" required >
                            <option value="">Pilih Jenis Penerima</option>
                            <?php
                               $i=0;
                               foreach($select_jenis_penerima as $select){
                               $i++;
                             ?>
                            <option value="<?php echo $select->id_jenis_penerima; ?>"><?php echo $select->nama_jenis_penerima; ?></option>

                            <?php
                            }
                            ?>
                            <!-- 1 terkercil levelnya 1> paling tinggi` -->
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Penerima Barang :</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="penerima_barang" required name="penerima_barang">
                            <option value="">Pilih Penerima Barang</option>

                          </select>
                        </div>
                      </div>
                      <div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Bidang Penerima Barang :</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="detail_penerima_barang" required name="detail_penerima_barang">
                            <option value="">Pilih Bidang Penerima Barang</option>

                          </select>
                        </div>
                      </div>
                      <?php
                      foreach($belum_finalisasi as $data){
                        if($data->status == 0){
                      ?>

                      <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                          <button type="sumbmit" class="btn btn-primary">Simpan </button>
                          <button type="reset" class="btn btn-default btn-outline">Reset</button>
                        </div>
                      </div>
                    <?php
                      }else{
                      ?>
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button disabled type="button" class="btn btn-primary">Simpan </button>
                                <button disabled type="button" class="btn btn-default btn-outline">Reset</button>
                            </div>
                        </div>
                      <?php
                      }
                    } ?>
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
       <h3 class="panel-title">Data Pegambilan Barang</h3>
     </header>
     <div class="panel-body">
       <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
         <thead>
           <tr>
             <th>NO</th>
             <th>Jenis Penerima</th>
             <th>Penerima Barang</th>
             <th>Bidang Penerima Barang</th>
             <th>Tanggal</th>
             <?php
                $super_admin=$this->session->userdata('super_admin');
                if ($super_admin==true){
               ?>
             <th>Admin</th>
             <?php
              }
              ?>
             <th>Tambah Barang</th>
             <th>Hapus</th>


           </tr>
         </thead>
         <tfoot>
           <tr>
             <th>NO</th>
             <th>Jenis Penerima</th>
             <th>Penerima Barang</th>
             <th>Bidang Penerima Barang</th>
             <th>Tanggal</th>
             <?php
                $super_admin=$this->session->userdata('super_admin');
                if ($super_admin==true){
               ?>
             <th>Admin</th>
             <?php
              }
              ?>
             <th>Tambah Barang</th>
             <th>Hapus</th>

           </tr>
         </tfoot>
         <tbody>
           <?php
              $i=0;
              foreach($data_pengambilan_barang as $data){
              $i++;
            ?>
             <tr <?php if($data->status_penerima_barang_keluar==0){?>class="alert alert-alt alert-danger alert-dismissible" <?php } ?>>
               <td ><?php echo $i; ?></td>
               <td><?php echo $data->nama_jenis_penerima; ?></td>
               <td><?php echo $data->nama_penerima; ?></td>
               <td><?php echo $data->nama_data_detail_penerima_barang; ?></td>
               <td><?php echo $data->tanggal_finalisasi ; ?></td>
               <?php
                  $super_admin=$this->session->userdata('super_admin');
                  if ($super_admin==true){
                 ?>
              <td><?php echo $data->nama_lengkap ; ?></td>
               <?php
                }
                ?>
               <td width="10%"> <a href="tambah_pengambilan_barang?id=<?php echo $data->id_penerima_barang_keluar; ?>"> <button type="sumbmit" class="btn btn-info">Tambah Barang</button></a></td>
               <?php

              if ($data->status_penerima_barang_keluar==0){

              echo"<td class='center' width='10%'><a href='". site_url()."ambil_barang/proses_hapus_pengambilan/?id=$data->id_penerima_barang_keluar' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?')
                \" title='Hapus'><button type='button' class='btn btn-danger'>Hapus</button></a>
                </td>";
              }else{
                $super_admin=$this->session->userdata('super_admin');
                if ($super_admin==true){
                  echo"<td class='center' width='10%'><a href='". site_url()."ambil_barang/proses_hapus_pengambilan/?id=$data->id_penerima_barang_keluar' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?')
                    \" title='Hapus'><button type='button' class='btn btn-danger'>Hapus</button></a>
                    </td>";
                }else{


                echo"<td class='center' width='10%'><button type='button' disabled class='btn btn-danger'>Hapus</button>
                  </td>";
                }
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
   <?php echo $this->load->view('share/modal', '', TRUE);?>
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
   <script src="<?php site_url(); ?>global/vendor/toastr/toastr.js"></script>
  <script src="<?php site_url(); ?>global/js/components/toastr.js"></script>

  <script type="text/javascript">
      $('body').on('hidden.bs.modal', '.modal', function () { $(this).removeData('bs.modal'); });
      $.fn.modal.Constructor.prototype.enforceFocus = function() {};
    </script>

</body>
</html>
