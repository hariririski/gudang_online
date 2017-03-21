<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Tambah Barang</title>
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



  <!-- Memanggil file .js untuk proses autocomplete -->


     <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
     <link href='<?php echo base_url();?>assets1/js/jquery.autocomplete.css' rel='stylesheet' />

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
<body class="site-navbar-small ">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<?php echo $this->load->view('share/menu', '', TRUE);?>
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Tambah Stok Barang</h1>


    </div>
    <div class="page-content">
      <!-- Panel Basic -->
    <div class="panel panel-bordered">
              <div class="panel-heading">
                <h3 class="panel-title">Data Faktur</h3>
              </div>
              <div class="panel-body">
                <?php
                   $i=0;
                   foreach($data_faktur as $data){
                   $i++;
                 ?>
                <table class="table table-striped">

                    <tbody>
                      <tr>
                        <td width="10%"><b>Tipe Faktur</b></td>
                        <td>:</td>
                        <td>
                        <?php echo $data->nama_faktur; ?>
                        </td>
                        <td><b>Pelaksana</b></td>
                        <td>:</td>
                        <td><?php echo $data->pelaksana; ?></td>
                      </tr>
                      <tr>
                        <td><b>No Faktur</b></td>
                        <td>:</td>
                        <td>
                        <?php echo $data->nomor_faktur; ?>
                        </td>
                        <td><b>Nominal</b></td>
                        <td>:</td>
                        <td><?php echo $data->nominal; ?></td>
                      </tr>
                      <tr>
                        <td><b>BAST</b></td>
                        <td>:</td>
                        <td>
                      <?php echo $data->bast; ?>
                        </td>
                        <td><b>Tahun Anggaran</b></td>
                        <td>:</td>
                        <td><?php echo $data->tahun_anggaran; ?></td>
                      </tr>
                      <tr>
                        <td><b>MAK</b></td>
                        <td>:</td>
                        <td>
                      <?php echo $data->mak; ?>
                        </td>
                        <td><b>Sumber Dana</b></td>
                        <td>:</td>
                        <td><?php echo $data->nama_sumber; ?></td>
                      </tr>

                    </tbody>
                  </table>
                  <?php
                   }
                   ?>

              </div>
      </div>

      <div class="panel">
     <header class="panel-heading">
       <div class="panel-actions"></div>
       <h3 class="panel-title">Data Barang</h3>
     </header>

     <script type='text/javascript'>
         var site = "<?php echo site_url();?>";
      $('change',function(){
             $('.autocomplete').autocomplete({
                 // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                 serviceUrl: site+'/barang/search',
                 // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                 onSelect: function (suggestion) {
                     $('#v_nim').val(''+suggestion.nim); // membuat id 'v_nim' untuk ditampilkan
                     $('#v_jurusan').val(''+suggestion.jurusan); // membuat id 'v_jurusan' untuk ditampilkan
                     $('#stok').val(''+suggestion.stok); // membuat id 'v_jurusan' untuk ditampilkan
                 }
             });


         });


          counter=0;
          function action(){
              counterNext=counter+1;
              var site = "<?php echo site_url();?>";

              document.getElementById("input"+counter).innerHTML =
  			"<table width='100%' class='table table-striped'><tr>"
        +'<td width="20%"> <input name="kode_barang[]" type="number"class="autocomplete'+counterNext+' nama form-control" id="kode_barang1" placeholder="Kode Barang" autofocus="on" required>  </td>'
        +'<td width="20%"> <input type="text" class="autocomplete1 form-control" id="v_jurusan'+counterNext+'" placeholder="Nama Barang" readonly="on">'
        +'<td width="20%"> <input type="text" class="autocomplete1 form-control"  id="tipe'+counterNext+'" placeholder="Tipe" readonly="on">'
        +'<td width="20%"> <input name="jumlah[]" type="number" class="form-control" placeholder="Jumlah" required>  </td>'
        +'<td width="20%"> <input name="harga_satuan[]" type="text" class="form-control" placeholder="Harga Satuan" required>  </td>'
  			+"</tr></table>"
  			+"<div id=\"input"+counterNext+"\"></div>";// perhatikan tanda petiknya, sama seperti pemrograman java yang lainnya


              $('change',function(){
                var a=counterNext;
                     $('.autocomplete'+a).autocomplete({

                         // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                         serviceUrl: site+'/barang/search',
                         // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                         onSelect: function (suggestion) {
                             $("#tipe"+a).val(''+suggestion.nim); // membuat id 'v_nim' untuk ditampilkan
                             $('#v_jurusan'+a).val(''+suggestion.jurusan); // membuat id 'v_jurusan' untuk ditampilkan
                         }
                     });


                 });
                 counter++;
          }
      </script>

     <div class="panel-body">
       <form role="form" action="proses/prosesformsatlet.php" method="post" enctype="multipart/form-data">




				<table width="100%" class="table table-striped">
					<thead>
					<th width="20%"> Kode Barang</th>
					<th width="20%"> Nama Barang</th>
					<th width="20%"> Tipe</th>
					<th width="20%"> Jumlah</th>
					<th width="20%"> Harga Satuan</th>


        </thead>


        <tbody>
					<tr>

					<td> <input name="kode_barang[]" class='autocomplete nama form-control' id="kode_barang" type="number"  placeholder="Kode Barang" autofocus="on"required>  </td>
					<td> <input type="text" class="autocomplete form-control" id="v_jurusan" placeholder="Nama Barang" disabled="">
					<td> <input type="text" class=" autocomplete form-control" id="v_nim"  placeholder="Tipe"disabled="">
					<td> <input name="jumlah[]" type="number" class="form-control" id="stok" placeholder="Jumlah" required min="0" >

           </td>
					<td> <input name="harga_satuan[]" type="text" class="form-control" placeholder="Harga Satuan" required>  </td>
					</td>

					</tr>

        </tbody>

					</table>

					<div id="input0"></div>
          <p align="right">
					<font color="red">Isikan dengan "-" jika tidak ingin diisi</font>
					<br>
					<a href="javascript:action();"><button type="button" class="btn btn-success btn-sm">+</button>
          </p>


<center><button type="sumbit" class="btn btn-info btn-sm">Tambah</button></center>
</form>

<!-- <table>
       <tr>
           <td><small>Nama :</small><br><input type="search" class='autocomplete nama form-control' id="autocomplete1"   name="nama_customer"/></td>
       </tr>
       <tr>
           <td><small>Jurusan :</small><br><input type="text" class='autocomplete' id="v_jurusan" name="nama_customer"/></td>
       </tr>
       <tr>
           <td><small>NIM :</small><br><input type="text" class='autocomplete' id="v_nim" name="nama_customer"/></td>
       </tr>
 </table> -->
<!-- <div id="demo"> <input><div>


       </div>
   </div> -->


    </div>
  </div>
  <!-- End Page -->
  <!-- Footer -->
<?php echo $this->load->view('share/footer2', '', TRUE);?>
  <!-- Core  -->
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <!-- <script type='text/javascript' src='<?php echo base_url();?>assets1/js/jquery-1.8.2.min.js'></script> -->
  <script type='text/javascript' src='<?php echo base_url();?>assets1/js/jquery.autocomplete.js'></script>
  <!-- <script src="<?php echo site_url(); ?>global/vendor/jquery/jquery.js"></script> -->
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
</body>
</html>
