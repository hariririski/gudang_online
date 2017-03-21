<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok  {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function stok_barang($id_barang) {
		 $jumlah_barang_masuk=0;
		 $jumlah_barang_keluar=0;
		 $sisa=0;
		 $CI =& get_instance();
     $CI->load->model('M_barang');


		$masuk['barang_masuk']= $CI->M_barang->barang_masuk($id_barang);
		 foreach($masuk['barang_masuk'] as $data){
			 $jumlah_barang_masuk= $data->barang_masuk;
		 }

		 $masuk['barang_keluar']= $CI->M_barang->barang_keluar($id_barang);
 		 foreach($masuk['barang_keluar'] as $data){
 			 $jumlah_barang_keluar= $data->barang_keluar;
 		 }
		 return $sisa=$jumlah_barang_masuk - $jumlah_barang_keluar;
		// echo "Masuk : $jumlah_barang_masuk <br> keluar : $jumlah_barang_keluar <br> sisa : $sisa";


	 }


	 

}
