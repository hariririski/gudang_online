<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Tambah Pengambilan Barang</title>
  <?php echo $this->load->view('share/icon', '', TRUE);?>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/site.min.css">

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
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <link rel="stylesheet" href="<?php site_url(); ?>global/vendor/toastr/toastr.css">


  <!-- Memanggil file .js untuk proses autocomplete -->


     <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
     <!-- <link href='<?php echo base_url();?>assets1/js/jquery.autocomplete.css' rel='stylesheet' /> -->
     	 <link rel="stylesheet" href="<?php echo site_url()?>assets/jquery.auto-complete.css">
     <!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->


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
  <!-- <script>
function myFunction() {
    var x = document.getElementById("autocomplete1").value;


  document.getElementById("demo").innerHTML = "<input value='"+x+"'>";

</script> -->


</head>
<body class="site-navbar-small " <?php echo $this->session->flashdata('pesan')?>>
  <div class="toast-example" id="barang" data-plugin="toastr"
                       data-message="Maaf Barang Tidak Ditemukan"
                       data-container-id="toast-bottomFullWidth" data-position-class="toast-bottom-full-width "
                       data-icon-class="toast-just-text toast-error toast-shadow"
                       data-show-method="slideDown" href="javascript:void(0)"
                       role="button"></div>
                       <div class="toast-example" id="berhasil" aria-live="polite" data-plugin="toastr" data-message="<strong>Selamat !</strong> Anda Berhasil Menambahkan Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-success toast-shadow" role="alert"></div>
                       <div class="toast-example" id="gagal" aria-live="polite" data-plugin="toastr" data-message="<strong>Maaf !</strong> Anda Gagal Menambahkan Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-error toast-shadow" role="alert"></div>

                        <div class="toast-example" id="berhasil_edit" aria-live="polite" data-plugin="toastr" data-message="<strong>Selamat !</strong> Anda Berhasil Mengedit Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-success toast-shadow" role="alert"></div>
                        <div class="toast-example" id="gagal_edit" aria-live="polite" data-plugin="toastr" data-message="<strong>Maaf !</strong> Anda Gagal Mengedit Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-error toast-shadow" role="alert"></div>
                        <div class="toast-example" id="barang_sudah_ada" data-plugin="toastr"
                                             data-message="Maaf Barang Sudah Pernah Di Masukkan"
                                             data-container-id="toast-bottomFullWidth" data-position-class="toast-bottom-full-width "
                                             data-icon-class="toast-just-text toast-warning toast-shadow"
                                             data-show-method="slideDown" href="javascript:void(0)"
                        role="button"></div>
                        <div class="toast-example" id="berhasil_finalisasi" data-plugin="toastr"
                                             data-message="Selamat Ada Berhasil Finalisasi, dan Stok telah Berkurang"
                                             data-container-id="toast-bottomFullWidth" data-position-class="toast-bottom-full-width "
                                             data-icon-class="toast-just-text toast-success toast-shadow"
                                             data-show-method="slideDown" href="javascript:void(0)"
                        role="button"></div>
                        <div class="toast-example" id="gagal_finalisasi" data-plugin="toastr"
                                             data-message="Maaf Selamat Ada Gagal Finalisasi"
                                             data-container-id="toast-bottomFullWidth" data-position-class="toast-bottom-full-width "
                                             data-icon-class="toast-just-text toast-danger toast-shadow"
                                             data-show-method="slideDown" href="javascript:void(0)"
                        role="button"></div>

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
                <h3 class="panel-title">Data Pengambilan Barang</h3>
              </div>
              <div class="panel-body">
                <?php
                   $i=0;
                   $id_penerima_barang_keluar;
                   foreach($penerima_barang_keluar as $data){
                   $i++;
                  $id_penerima_barang_keluar= $data->id_penerima_barang_keluar;
                 ?>
                <table class="table table-striped">

                    <tbody>
                      <tr>
                        <td width="10%"><b>Jenis Penerima</b></td>
                        <td>:</td>
                        <td>
                        <?php echo $data->nama_jenis_penerima; ?>
                        </td>
                        <td><b>Penerima Barang</b></td>
                        <td>:</td>
                        <td><?php echo $data->nama_penerima; ?></td>
                      </tr>
                      <tr>
                        <td><b>Tanggal Finalisasi</b></td>
                        <td>:</td>
                        <td>
                        <?php echo $data->tanggal_finalisasi; ?>
                        </td>

                        <td><b>Bidang Penerima Barang</b></td>
                        <td>:</td>
                        <td>  <?php echo $data->nama_data_detail_penerima_barang; ?></td>


                      </tr>

                      <tr>

                        <?php
                        $super_admin=$this->session->userdata('super_admin');
                        if ($super_admin==true){
                        ?>
                        <td><b>Admin</b></td>
                        <td>:</td>
                        <td>
                        <?php echo $data->nama_lengkap; ?>
                        </td>
                        <?php
                      }
                        ?>
                      </tr>


                    </tbody>
                  </table>
                  <?php
                   }
                   ?>
                   <p align ="right">
                     <a href="<?php echo site_url (); ?>edit_pengambilan_barang?id=<?php echo $data->id_penerima_barang_keluar; ?>"  data-target="#exampleFillIn" data-toggle="modal">
                       <button type="button" class="btn btn-animate  btn-success">
                         <span><i class="icon wb-edit" aria-hidden="true"></i>Edit Data Pengambilan Barang</span>
                       </button>
                   </a>
                   </p>
              </div>

      </div>

      <div class="panel">

     <header class="panel-heading">
       <div class="panel-actions"></div>
       <h3 class="panel-title">Data Barang</h3>
     </header>

     <div class="panel-body">
      <form action="ambil_barang2?id=<?php echo $id_penerima_barang_keluar ?>" method="POST">
       <div class="col-md-11">
          <input type="text" class="form-control" name="id"  id="hero-demo" placeholder="Kode Barang" autocomplete="on" required="" autofocus="on">
       </div >
       <div class="col-md-1">
          <button type="sumbmit" class="btn btn-info">Tambah</button>
        </div>
      </form>
      <br>
      <br>
      <br>



       <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
         <thead>

           <tr>

             <th>NO</th>
             <th>Kode Barang<br></th>
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

                <th >Edit</th>
                <th >Hapus</th>







           </tr>
         </thead>

         <tbody>
           <?php
               $i=0;
               foreach($data_barang_keluar as $data){
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
                    <td><?php echo $data->tangggal_dibuat; ?></td>
                    <td><?php echo $data->nama_lengkap; ?></td>
                   <?php
                  }
                  ?>

                  <td><?php echo $data->nama_satuan; ?></td>
                  <td><?php echo $data->jumlah_keluar; ?></td>



                 <?php
                echo"<td class='center' width='5%'><a   data-target='#exampleModalPrimary'
                         data-toggle='modal'  href='". site_url()."edit_data_barang_faktur?id=$data->id_barang' onclick=\"return confirm('Apakah Anda Ingin Mengubah Data?')
                   \" title='edit'><button type='button' class='btn btn-warning'>Edit</button></a>
                   </td>";

                 ?>
                 <?php
                  if ($data->status_barang_keluar==0){

                echo"<td class='center' width='5%'><a   data-target='#exampleModalPrimary'
                         data-toggle='modal'  href='". site_url()."edit_data_barang_faktur?id=$data->id_barang' onclick=\"return confirm('Apakah Anda Ingin Hapus Data?')
                   \" title='edit'><button type='button' class='btn btn-danger'>Hapus</button></a>
                   </td>";
                 }else{
                   echo"<td class='center' width='5%'><button disabled type='button' class='btn btn-danger'>Hapus</button>
                      </td>";
                 }
                 ?>

             </tr>

             <?php
              }
              ?>
         </tbody>
       </table>

       <p align ="center">
         <a href="ambil_barang/finalisasi_pengambilan_barang?id=<?php echo $id_penerima_barang_keluar ?>" >
           <button type="button" class="btn btn-animate  btn-info">
             <span><i class="icon wb-check-circle" aria-hidden="true"></i>Finalisasi</span>
           </button>
       </a>

          <a href="<?php site_url()?>cetak_faktur_pengambilan?id=<?php echo $id_penerima_barang_keluar ?>" >
            <button type="button" class="btn btn-animate  btn-success">
              <span><i class="icon wb-print" aria-hidden="true"></i>Cetak Faktur</span>
            </button>
        </a>
        </p>

     </div>

   </div>
  <!-- End Page -->
  <!-- Footer -->
<?php echo $this->load->view('share/footer2', '', TRUE);?>
  <!-- Core  -->
  <?php echo $this->load->view('share/modala', '', TRUE);?>
  <?php echo $this->load->view('share/modal', '', TRUE);?>
  <script src="<?php echo site_url(); ?>global/vendor/jquery/jquery.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/animsition/animsition.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php echo site_url(); ?>global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

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

  <script src="<?php base_url()?>assets/jquery.auto-complete.js"></script>
  <script>
      $(function(){
          $('#hero-demo').autoComplete({
              minChars: 1,
              source: function(term, suggest){
                  term = term.toLowerCase();
                  var choices = [ <?php foreach($auto_barang_stok as $data){ echo "'";
                                   echo $data->id_barang;
                                   echo "'";
                                   echo","; }  ?> 'Tidak Ada'];
                  var suggestions = [];
                  for (i=0;i<choices.length;i++)
                      if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                  suggest(suggestions);
              }
          });

      });


  </script>
</body>
</html>
