<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur extends CI_Controller {

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
			$this->load->model('M_tipe_faktur');
			$this->load->model('M_sumber_dana');
			$this->load->model('M_faktur');
			$this->load->model('M_barang');
			$admin=$this->session->userdata('admin');
			$super_admin=$this->session->userdata('super_admin');
				 if( empty($admin)==1 && empty($super_admin)==1){

					redirect("login/logout");
				 }

   }
	public function tambah_faktur()
	{
		$data['tipe_faktur'] = $this->M_tipe_faktur->lihat();
		$data['sumber_dana'] = $this->M_sumber_dana->lihat();

		$this->load->view('tambah/tambah_faktur',$data);
	}
	public function data_faktur()
	{
		$data['data_faktur'] = $this->M_faktur->lihat();
		$this->load->view('lihat/data_faktur',$data);
	}

	public function detail_faktur()
	{
		$id=$_GET['id'];
		$data['data_faktur'] = $this->M_faktur->lihat_perfaktur($id);
		$data['data_barang_faktur'] = $this->M_barang->lihat_barang_faktur($id);
		$this->load->view('lihat/detail_faktur',$data);
	}


	public function index()
	{
		$this->data_faktur();

	}



	// 	public function edit_data_faktur()
	// {

	// 	$data['lihat'] = $this->M_faktur->lihat();
	// 	$this->load->view('edit/edit_data_faktur',$data);
	// }


	public function edit_data_faktur()
	{

		$id=$_GET ['id'];
		$data['lihat'] = $this->M_faktur->lihat_perfaktur($id);
		$data['tipe_faktur'] = $this->M_tipe_faktur->lihat();
		$data['sumber_dana'] = $this->M_sumber_dana->lihat();
		$this->load->view('edit/edit_data_faktur',$data);
	}

	public function proses_edit_faktur()
	{
		$id=$_GET ['id'];
		$cek= $this->M_faktur->edit($id);

		if($cek){
			$data="document.getElementById('berhasil_edit').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect("tambah_stok_barang?id=$id");
		}else{
			$data="document.getElementById('gagal_edit').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect("tambah_stok_barang?id=$id");
		}

	}


	public function finalisasi_faktur()
	{
		$id=$_GET ['id'];
		$cek= $this->M_faktur->finalisasi_faktur($id);

		if($cek){
			$data="document.getElementById('berhasil_finalisasi').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect("tambah_stok_barang?id=$id");
		}else{
			$data="document.getElementById('gagal_finalisasi').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect("tambah_stok_barang?id=$id");
		}

	}

	public function proses_tambah_faktur()
	{
		$cek= $this->M_faktur->tambah();

		if($cek){
			$data="document.getElementById('berhasil').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('faktur');
		}else{
			$data="document.getElementById('gagal').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('tambah_faktur');
		}


}

public function proses_hapus_faktur($id)
	{
		echo $id=$_GET ['id'];
		$cek= $this->M_faktur->proses_hapus_faktur($id);

		if($cek){
			$data="document.getElementById('berhasil_hapus').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('faktur');
		}else{
			$data="document.getElementById('gagal_hapus').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('faktur');
		}

	}


}
