<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
			 $this->load->library('stok');
			 $this->load->database();
			  $this->load->model('M_faktur');
			  $this->load->model('M_ambil_barang');
			  $this->load->model('M_barang');
			 $admin=$this->session->userdata('admin');
			 $super_admin=$this->session->userdata('super_admin');
				 if( empty($admin)==1 && empty($super_admin)==1){

					redirect("login/logout");
				 }
   }
	public function index()
	{

		$data['jumlah_faktur'] = $this->M_faktur->jumlah_faktur();
		$data['faktur_belum_finalisasi'] = $this->M_faktur->belum_finalisasi();
		$data['pengambilan_belum_finalisasi'] = $this->M_ambil_barang->data_belum_finalisasi();
		$data['jumlah_barang'] = $this->M_barang->jumlah_barang();
		$data['data_barang'] = $this->M_barang->lihat();
		$this->load->view('home',$data);
	}
}
