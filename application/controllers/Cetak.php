<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

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

	 function __construct() {
       parent::__construct();
			 $this->load->helper('url');
			 $this->load->library('session');
			 $this->load->database();
			 $this->load->model('M_admin');
			 $this->load->model('M_barang');
			 $this->load->model('M_ambil_barang');
			 $this->load->model('M_faktur');
			 $this->load->model('M_ttd');
			 $admin=$this->session->userdata('admin');
  			$super_admin=$this->session->userdata('super_admin');
  				 if( empty($admin)==1 && empty($super_admin)==1){

  					redirect("login/logout");
  				 }
			 }

	public function faktur_pengambilan()
	{
		$id=$_GET['id'];
		$cek=null;
		$data['data_faktur'] = $this->M_ambil_barang->penerima_barang_keluar($id);
		$data['data_barang'] = $this->M_barang->lihat_penerima_barang_keluar($id);
		$data['ttd'] = $this->M_ttd->aktif();
		foreach ($data['ttd'] as $data2) {
			$cek=$data2->jumlah;

		}

		if($cek==null){
			$data2="document.getElementById('barang_sudah_ada').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data2.'"');
			redirect("tambah_pengambilan_barang?id=$id");

		}else if($cek==1){
			$this->load->view('cetak/cetak_faktur_pengambilan',$data);
		}else{
			$data2="document.getElementById('barang_sudah_ada').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data2.'"');
			redirect("tambah_pengambilan_barang?id=$id");
		}
	}

	public function daftar_penerimaan_barang()
	{
		$id=$_GET['id'];
		$data['data_faktur'] = $this->M_faktur->lihat_perfaktur($id);
		$data['data_barang'] = $this->M_barang->data_barang_faktur($id);
		//print_r($data['data_faktur']);
		$this->load->view('cetak/daftar_penerimaan_barang',$data);
	}

	public function rincian_barang_persediaan()
	{

		$this->load->view('cetak/rincian_barang_persediaan');
	}


}
